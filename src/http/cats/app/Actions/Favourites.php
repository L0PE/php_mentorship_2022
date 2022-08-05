<?php

use App\Controllers\FavouriteController;

require_once '../../boot/boot.php';

$controller = new FavouriteController($api);
$favourites = $controller->index();

include_once '../Views/Favourites.php';
