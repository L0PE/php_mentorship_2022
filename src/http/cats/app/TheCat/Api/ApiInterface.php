<?php

namespace App\TheCat\Api;

use App\TheCat\Responses\ResponseInterface;

interface ApiInterface
{
    public function breeds(): ResponseInterface;
    public function favoriteList(): ResponseInterface;
    public function addFavorite(string $image_id): void;
    public function removeFavorite(string $favourite_id): void;
    public function randomImage(): ResponseInterface;
}