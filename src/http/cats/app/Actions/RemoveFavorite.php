<?php

use App\Controllers\FavouriteController;

require_once '../../boot/boot.php';

if (
    !isset($_POST['submit']) ||
    !isset($_POST['id']) ||
    empty($_POST['id'])
) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

$favourite_id = strip_tags(stripslashes(trim($_POST['id'])));

$controller = new FavouriteController($api);
$controller->destroy($favourite_id);
