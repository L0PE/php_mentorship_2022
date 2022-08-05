<?php

use App\Controllers\FavouriteController;

require_once '../../boot/boot.php';

if (
    !isset($_POST['submit']) ||
    !isset($_POST['image_id']) ||
    empty($_POST['image_id'])
) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

$image_id = strip_tags(stripslashes(trim($_POST['image_id'])));

$controller = new FavouriteController($api);
$controller->store($image_id);
