<?php
// test.php <userId>

use apiV1\roles\Admin;
use apiV1\roles\User;

require_once __DIR__ . "/src/EntityManager.php";

$userId = $argv[1];

// Get the user
$em = GetEntityManager();
/** @var User $user */
$user = $em->find(User::class, $userId);

// Test if user is part of the group "admin"
$test = Admin::isAdmin($userId);

echo "\n".$user->getFirstName()." ".$user->getLastName()." is ".(!$test ? 'NOT ' : '')."an Administrator."."\n";