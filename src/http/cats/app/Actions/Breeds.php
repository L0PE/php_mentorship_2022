<?php

use App\Controllers\BreedController;

require_once '../../boot/boot.php';

$controller = new BreedController($api, $entityManager);
$breeds = $controller->index();

include_once '../Views/Breeds.php';
