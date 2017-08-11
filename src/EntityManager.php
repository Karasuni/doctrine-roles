<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/../vendor/autoload.php';

# http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/configuration.html#obtaining-an-entitymanager

# Get EntityManager as a function <> add $em to global scope when called?
function GetEntityManager()
{
    $paths = array(__DIR__ . '/../config/yaml');
    $isDevMode = true;

    $config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

    // TODO Use YML instead?
    $file_json = json_decode(file_get_contents(__DIR__ . '/../config/database-secret.json', true), true);

    // the connection configuration
    $dbParams = array(
        'driver'   => $file_json['driver'],
        'host'     => $file_json['host'],
        'dbname'   => $file_json['dbname'],
        'user'     => $file_json['user'],
        'password' => $file_json['password']
    );

    $entityManager = EntityManager::create($dbParams, $config);

    return $entityManager;
}