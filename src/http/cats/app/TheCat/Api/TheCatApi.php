<?php

namespace App\TheCat\Api;

use App\TheCat\Exceptions\BreedsNotFoundException;
use App\TheCat\Exceptions\FavouriteNotFoundException;
use App\TheCat\Exceptions\ImageNotFoundException;
use App\TheCat\Requests\AddFavouriteRequest;
use App\TheCat\Requests\BreedsRequest;
use App\TheCat\Requests\FavouriteListRequest;
use App\TheCat\Requests\RandomImageRequest;
use App\TheCat\Requests\RemoveFavouriteRequest;
use App\TheCat\Responses\BreedResponse;
use App\TheCat\Responses\FavoriteListResponse;
use App\TheCat\Responses\RandomImageResponse;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;

class TheCatApi implements ApiInterface
{
    public function __construct(private ClientInterface $httpClient)
    {
    }

    public function breeds(): BreedResponse
    {
        $request = (new BreedsRequest())->getRequest();

        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new BreedsNotFoundException;
        }

        if (200 === $response->getStatusCode()) {
            return new BreedResponse($response->getBody());
        } else {
            throw new BreedsNotFoundException;
        }
    }

    public function favoriteList(): FavoriteListResponse
    {
        $request = (new FavouriteListRequest())->getRequest();

        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new FavouriteNotFoundException();
        }

        if (200 === $response->getStatusCode()) {
            return new FavoriteListResponse($response->getBody());
        } else {
            throw new FavouriteNotFoundException();
        }
    }

    public function addFavorite(string $image_id): void
    {
        $request = (new AddFavouriteRequest())->getRequest($image_id);

        try {
            $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $e) {}
    }

    public function removeFavorite(string $favourite_id): void
    {
        $request = (new RemoveFavouriteRequest())->getRequest($favourite_id);

        try {
            $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $e) {}
    }

    public function randomImage(): RandomImageResponse
    {
        $request = (new RandomImageRequest())->getRequest();

        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new ImageNotFoundException();
        }

        if (200 === $response->getStatusCode()) {
            return new RandomImageResponse($response->getBody());
        } else {
            throw new ImageNotFoundException();
        }
    }
}
