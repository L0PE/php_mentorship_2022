<?php

use App\DTO\BookDTO;
use App\Models\Book;

require_once '../../config/bootstrap.php';

$books = [
    [
        'title' => 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5 (Learning PHP, MYSQL, Javascript, CSS & HTML5)',
        'author' => 'Robin Nixon',
        'publisher' => 'O\'Reilly Media',
        'year' => '2014',
    ],
    [
        'title' => 'JavaScript: The Definitive Guide: Master the World\'s Most-Used Programming Language 7th Edition',
        'author' => 'David Flanagan',
        'publisher' => 'O\'Reilly Media',
        'year' => '2020'
    ],
    [
        'title' => 'Programming TypeScript: Making Your JavaScript Applications Scale 1st Edition',
        'author' => 'Boris Cherny',
        'publisher' => 'O\'Reilly Media',
        'year' => '2019'
    ],
    [
        'title' => 'Grokking Algorithms: An Illustrated Guide for Programmers and Other Curious People 1st Edition',
        'author' => 'Aditya Bhargava',
        'publisher' => 'Manning',
        'year' => '2021'
    ],

];

foreach ($books as $book) {
    $bookData = new BookDTO($book);

    $book = new Book();
    $book->createOrUpdate($bookData);

    $entityManager->persist($book);
    $entityManager->flush();
}

echo count($books) . ' books added successfully!';
