<?php

namespace App\Controllers;

use App\TheCat\Api\ApiInterface;
use App\TheCat\Exceptions\ImageNotFoundException;

class ImageController
{
    public function __construct(private ApiInterface $api)
    {
    }

    public function show(): ?array
    {
        if (isset($_SESSION['offline']) && $_SESSION['offline']) {
            $error = 'The image page is not available in offline mode.';
            include_once '../Views/OfflineMod.php';
        }

        try {
            return $this->api->randomImage()->getData();
        } catch (ImageNotFoundException) {
            return null;
        }
    }
}
