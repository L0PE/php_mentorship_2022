<?php

namespace App\System\UseCases\Factory;

use App\Repository\TextRepository;
use App\System\UseCases\GetTextStatisticFromFileCase;
use App\System\UseCases\GetTextStatisticFromUrlUseCase;
use App\System\UseCases\GetTextStatisticUseCase;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class StatisticUseCaseFactory
{
    public function __construct(
        private TextRepository $repository,
        private ManagerRegistry $doctrine,
        private HttpClientInterface $client
    ) {
    }

    public function getUseCase(Request $request, SessionInterface $session)
    {
        if ($request->get('text')) {
            return new GetTextStatisticUseCase($this->repository, $this->doctrine, $session, $request->get('text'));
        }

        if ($request->get('url')) {
            return new GetTextStatisticFromUrlUseCase(
                $this->repository,
                $this->doctrine,
                $this->client,
                $session,
                $request->get('url')
            );
        }

        if ($request->files->get('file')) {
            return new GetTextStatisticFromFileCase(
                $this->repository,
                $this->doctrine,
                $session,
                $request->files->get('file')
            );
        }

        return null;
    }
}
