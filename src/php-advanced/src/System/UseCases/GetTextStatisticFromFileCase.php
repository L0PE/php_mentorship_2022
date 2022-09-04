<?php

namespace App\System\UseCases;

use App\Entity\Text;
use App\Repository\TextRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GetTextStatisticFromFileCase
{
    public function __construct(
        private TextRepository $repository,
        private ManagerRegistry $doctrine,
        private SessionInterface $session,
        private UploadedFile $file
    ) {
    }

    public function handle(Request $request): ?Text
    {
        if (
            !$this->file->isFile()
            || !$this->file->isValid()
            || !in_array($this->file->getMimeType(), ['text/xml', 'text/html', 'text/plain'])
        ) {
            return null;
        }

        return (
            new GetTextStatisticUseCase(
                $this->repository,
                $this->doctrine,
                $this->session,
                $this->file->getContent()
            )
        )->handle($request);
    }
}
