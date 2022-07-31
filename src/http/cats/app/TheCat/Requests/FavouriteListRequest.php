<?php

namespace App\TheCat\Requests;

use Config\TheCatApiConfigEnum;
use GuzzleHttp\Psr7\Request;

class FavouriteListRequest
{
    public function getRequest(): Request
    {
        return new Request('GET', $this->getUrl(), [
            'Content-Type' => 'application/json',
            'x-api-key' => TheCatApiConfigEnum::API_KEY,
        ]);
    }

    private function getUrl(): string
    {
        return sprintf('%s/favourites', TheCatApiConfigEnum::API_ENDPOINT);
    }
}
