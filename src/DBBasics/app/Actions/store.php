<?php

use App\DTO\BookDTO;
use App\Models\Book;
use App\Validator\BookValidator;

require_once '../../config/bootstrap.php';

$action = __FILE__;
$pageTitle = 'Add book';


if (isset($_POST['submit'])) {
    $bookValidator = new BookValidator($_POST);

    if ($bookValidator->is_valid()) {
        $bookData = new BookDTO($bookValidator->get_data());

        $book = new Book();
        $book->createOrUpdate($bookData);

        $entityManager->persist($book);
        $entityManager->flush();

        header('Location: index.php');
        exit();
    }

    $error = 'You provide invalid data';
}


include_once '../Views/Form.php';
