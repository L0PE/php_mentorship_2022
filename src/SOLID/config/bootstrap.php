<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__ . '/../app/Models'];

$isDevMode = false;
$proxyDir = __DIR__ . '/../app/Models/Proxies';
$cache = null;
$useSimpleAnnotationReader = false;

// the connection configuration
$dbParams = require_once "database.php";

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$entityManager = EntityManager::create($dbParams, $config);
