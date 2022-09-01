<?php

namespace App\System\UseCases;

use App\Entity\Text;
use App\Repository\TextRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GetTextStatisticFromUrlUseCase
{
    public function __construct(
        private TextRepository      $repository,
        private ManagerRegistry     $doctrine,
        private HttpClientInterface $client,
        private SessionInterface    $session,
        private string              $url
    )
    {
    }

    public function handle(): ?Text
    {
        $response = $this->client->request(
            'GET',
            $this->url
        );

        if (200 !== $response->getStatusCode()) {
            return null;
        }

        return (new GetTextStatisticUseCase($this->repository, $this->doctrine, $this->session, $response->getContent(false)))->handle();
    }
}
