<?php

namespace App\System\UseCases;

use App\Repository\TextRepository;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ImportXmlStatisticUseCase
{
    public function __construct(private TextRepository $repository)
    {
    }

    public function handle(string $hash): ?string
    {
        $textEntity = $this->repository->findOneByHash($hash);

        if (is_null($textEntity)) {
            return null;
        }

        return (new Serializer([new ObjectNormalizer()], [new XmlEncoder()]))->serialize($textEntity, 'xml');
    }
}
