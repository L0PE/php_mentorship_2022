<?php

use App\DTO\BookDTO;
use App\Validator\BookValidator;

require_once '../../config/bootstrap.php';

$action = __FILE__;
$pageTitle = 'Update book';

if (!isset($_REQUEST['id'])) {
    header('HTTP/1.0 404 Not Found');;
    exit();
}

$book = $entityManager->getRepository('App\Models\Book')->find($_REQUEST['id']);

if (is_null($book)){
    header('HTTP/1.0 404 Not Found');
    exit();
}

if (isset($_POST['submit'])) {
    $bookValidator = new BookValidator($_POST);

    if ($bookValidator->is_valid()) {
        $bookData = new BookDTO($bookValidator->get_data());

        $book->createOrUpdate($bookData);

        $entityManager->persist($book);
        $entityManager->flush();

        header('Location: index.php');
        exit();
    }

    $error = 'You provide invalid data';
}

include_once '../Views/Form.php';
