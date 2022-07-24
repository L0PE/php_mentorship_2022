<?php

use App\Exporter\ExporterFactory;

require_once '../../config/bootstrap.php';

if (!isset($_REQUEST['id'])) {
    header('HTTP/1.0 404 Not Found');;
    exit();
}

/** @var \App\Models\Book $book */
$book = $entityManager->getRepository('App\Models\Book')->find($_REQUEST['id']);

if (is_null($book) || is_null($book->getPathToFile())){
    header('HTTP/1.0 404 Not Found');
    exit();
}

$exporter = (new ExporterFactory())->create();

echo $exporter->export($book->getPathToFile());
echo '<br><a href="Index.php">Home</a>';
