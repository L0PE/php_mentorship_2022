<?php

namespace App\TheCat\Requests;

use Config\TheCatApiConfigEnum;
use GuzzleHttp\Psr7\Request;

class BreedsRequest
{
    public function getRequest(): Request
    {
        return new Request('GET', $this->getUrl(), [
            'Content-Type' => 'application/json'
        ]);
    }

    private function getUrl(): string
    {
        return sprintf('%s/breeds', TheCatApiConfigEnum::API_ENDPOINT);
    }
}
