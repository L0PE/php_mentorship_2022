<?php

namespace App\Controllers;

use App\TheCat\Api\ApiInterface;
use App\TheCat\Exceptions\FavouriteNotFoundException;

class FavouriteController
{
    public function __construct(private ApiInterface $api)
    {
    }

    public function index(): ?array
    {
        if (isset($_SESSION['offline']) && $_SESSION['offline']) {
            $error = 'The Favorites page is not available in offline mode.';
            include_once '../Views/OfflineMod.php';
        }

        try {
            return $this->api->favoriteList()->getData();
        } catch (FavouriteNotFoundException) {
            return null;
        }
    }

    public function store(string $id): void
    {
        if (isset($_SESSION['offline']) && $_SESSION['offline']) {
            header('HTTP/1.0 404 Not Found');
            exit();
        }

        $this->api->addFavorite($id);

        header('Location: Index.php');
        exit();
    }

    public function destroy(string $id): void
    {
        if (isset($_SESSION['offline']) && $_SESSION['offline']) {
            header('HTTP/1.0 404 Not Found');
            exit();
        }

        $this->api->removeFavorite($id);

        header('Location: Favourites.php');
        exit();
    }
}
