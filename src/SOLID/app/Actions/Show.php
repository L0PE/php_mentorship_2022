<?php

require_once '../../config/bootstrap.php';

if (!isset($_REQUEST['id'])) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

/** @var \App\Models\Book $book */
$book = $entityManager->getRepository('App\Models\Book')->find($_REQUEST['id']);

if (is_null($book)){
    header('HTTP/1.0 404 Not Found');
    exit();
}

$pageTitle = $book->getTitle();

include_once '../Views/Show.php';
