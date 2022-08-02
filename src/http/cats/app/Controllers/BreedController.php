<?php

namespace App\Controllers;

use App\TheCat\Api\ApiInterface;
use App\TheCat\Exceptions\BreedsNotFoundException;
use Doctrine\ORM\EntityManagerInterface;

class BreedController
{
    public function __construct(private ApiInterface $api, private EntityManagerInterface $entityManager)
    {
    }

    public function index(): array
    {
        if (isset($_SESSION['offline']) && $_SESSION['offline']) {
            return $this->getBreedsFromDatabase();
        }

        try {
            return $this->api->breeds()->getData();
        } catch (BreedsNotFoundException) {
            return $this->getBreedsFromDatabase();
        }
    }

    private function getBreedsFromDatabase(): array
    {
        return $this->entityManager->getRepository('App\Models\Breed')->findAll();
    }
}
