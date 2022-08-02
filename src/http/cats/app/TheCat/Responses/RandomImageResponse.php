<?php

namespace App\TheCat\Responses;

use Psr\Http\Message\StreamInterface;

class RandomImageResponse implements ResponseInterface
{
    public function __construct(private StreamInterface $stream)
    {
    }

    public function getData(): array
    {
        $imageData = json_decode($this->stream, true);

        return [
            'id' => $imageData[0]['id'],
            'url' => $imageData[0]['url'],
        ];
    }
}
