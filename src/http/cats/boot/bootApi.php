<?php

use App\Decorators\CacheDecorator;
use App\Decorators\LogDecorator;
use App\TheCat\Api\TheCatApi;
use GuzzleHttp\Client;

require_once "bootDoctrine.php";
require_once "bootRedis.php";

$httpClient = new Client();

if (isset($_SESSION['logging']) && $_SESSION['logging']) {
    $httpClient = new LogDecorator($httpClient, $entityManager);
}

if (isset($_SESSION['cashing']) && $_SESSION['cashing']) {
    $httpClient = new CacheDecorator($httpClient, $redisClient);
}

$api = new TheCatApi($httpClient);
