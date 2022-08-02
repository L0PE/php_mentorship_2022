<?php

namespace App\Decorators;

use App\Models\Log;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class LogDecorator extends AbstractDecorator
{
    public function __construct(ClientInterface $httpClient, private EntityManagerInterface $entityManager)
    {
        parent::__construct($httpClient);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $log = new Log();
        $log->create([
            'method' => $request->getMethod(),
            'url' => $request->getUri(),
            'headers' => $request->getHeaders(),
            'body' => $request->getBody(),
        ]);

        $this->entityManager->persist($log);
        $this->entityManager->flush();

        return $this->httpClient->sendRequest($request);
    }
}
