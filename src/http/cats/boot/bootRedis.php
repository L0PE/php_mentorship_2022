<?php

use Predis\Client;

require_once __DIR__ . "/../vendor/autoload.php";

$redisConfig = require_once __DIR__ . "/../config/redis.php";

$redisClient = new Client($redisConfig);
