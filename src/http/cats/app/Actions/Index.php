<?php

use App\Controllers\ImageController;

require_once '../../boot/boot.php';

$controller = new ImageController($api);
$image = $controller->show();

include_once '../Views/Image.php';
