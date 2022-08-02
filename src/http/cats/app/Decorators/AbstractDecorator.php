<?php

namespace App\Decorators;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AbstractDecorator implements ClientInterface
{

    public function __construct(protected ClientInterface $httpClient)
    {
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }
}
