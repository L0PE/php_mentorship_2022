<?php

use App\Validator\IndexValidator;

require_once '../../config/bootstrap.php';

$indexValidator = new IndexValidator($_GET);
extract($indexValidator->getData());

$repository = $entityManager->getRepository('App\Models\Book');
$repository->setPaginator($title , $sortBy, $sortOrder);

$books = $repository->getWithPagination($page);
$pages =  $repository->getTotalPages();

$linkPattern = '?&sortBy=%s&sortOrder=%s';
$linkPattern .= empty($title) ? '' : sprintf('&title=%s', $title);

include_once '../Views/Index.php';
