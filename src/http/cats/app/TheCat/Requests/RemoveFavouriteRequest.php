<?php

namespace App\TheCat\Requests;

use Config\TheCatApiConfigEnum;
use GuzzleHttp\Psr7\Request;

class RemoveFavouriteRequest
{
    public function getRequest(string $favourite_id): Request
    {
        return new Request('Delete', $this->getUrl($favourite_id),
            [
                'Content-Type' => 'application/json',
                'x-api-key' => TheCatApiConfigEnum::API_KEY,
            ]
        );
    }

    private function getUrl(string $favourite_id): string
    {
        return sprintf('%s/favourites/%s', TheCatApiConfigEnum::API_ENDPOINT, $favourite_id);
    }
}
