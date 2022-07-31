<?php

namespace App\Decorators;

use GuzzleHttp\Psr7\Response;
use Predis\ClientInterface as PredisClientInterface;
use Psr\Http\Client\ClientInterface as HttpClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CacheDecorator extends AbstractDecorator
{
    private const TTL = 3600;

    public function __construct(HttpClientInterface $httpClient, private PredisClientInterface $redisClient)
    {
        parent::__construct($httpClient);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        if (strtolower($request->getMethod()) !== 'get') {
            $this->httpClient->sendRequest($request);
        }

        $key = md5(sprintf('request-%s-%s', $request->getMethod(), $request->getUri()));

        if ($this->redisClient->exists($key)){
            return new Response(body: $this->redisClient->get($key));
        }

        $response = $this->httpClient->sendRequest($request);

        $this->redisClient->set($key, $response->getBody()->getContents(), 'EX', self::TTL);

        return $response;
    }
}
