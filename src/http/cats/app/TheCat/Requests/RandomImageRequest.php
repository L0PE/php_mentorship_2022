<?php

namespace App\TheCat\Requests;

use Config\TheCatApiConfigEnum;
use GuzzleHttp\Psr7\Request;

class RandomImageRequest
{
    public function getRequest(): Request
    {
        return new Request('GET', $this->getUrl(), [
            'Content-Type' => 'application/json'
        ]);
    }

    private function getUrl(): string
    {
        return sprintf('%s/images/search?format=json&limit=1', TheCatApiConfigEnum::API_ENDPOINT);
    }
}
