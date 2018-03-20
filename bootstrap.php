<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

$conn = array(
    'dbname' => 'dtest',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$entityManager = EntityManager::create($conn, $config);

