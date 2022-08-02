<?php

namespace App\TheCat\Responses;

use Psr\Http\Message\StreamInterface;

class FavoriteListResponse implements ResponseInterface
{
    public function __construct(private StreamInterface $stream)
    {
    }

    public function getData(): array
    {
        $favoritesData = json_decode($this->stream, true);

        $favorites = [];

        foreach ($favoritesData as $favoriteData) {
            $favorite = [
                'id' => $favoriteData['id'],
                'image_id' => $favoriteData['image_id'],
                'created_at' => $favoriteData['created_at'],
                'image' => $favoriteData['image']['url'],
            ];

            $favorites[] = $favorite;
        }

        return $favorites;
    }
}
