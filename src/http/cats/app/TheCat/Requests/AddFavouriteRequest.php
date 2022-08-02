<?php

namespace App\TheCat\Requests;

use Config\TheCatApiConfigEnum;
use GuzzleHttp\Psr7\Request;

class AddFavouriteRequest
{
    public function getRequest(string $image_id): Request
    {
        return new Request('Post', $this->getUrl(),
            [
                'Content-Type' => 'application/json',
                'x-api-key' => TheCatApiConfigEnum::API_KEY,
            ],
            $this->getBody($image_id)
        );
    }

    private function getUrl(): string
    {
        return sprintf('%s/favourites', TheCatApiConfigEnum::API_ENDPOINT);
    }

    private function getBody(string $image_id): string
    {
        return json_encode(['image_id' => $image_id]);
    }
}
