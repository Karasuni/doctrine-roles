<?php

use apiV1\roles\Group;
use apiV1\roles\GroupsUsers;
use apiV1\roles\User;

require_once __DIR__ . "/src/EntityManager.php";

$em = getEntityManager();

// Create group "admin"
$group = new Group();
$group->setName("admin");
$group->setDescription("Administrators");

// Creat user "tomb"
$user = new User();
$user->setId("tomb");
$user->setFirstName("Tom");
$user->setLastName("Bombadil");

$em->persist($group);
$em->persist($user);
$em->flush();

// Add user "tomb" to group "admin" with role "member"
$groupUserLink = new GroupsUsers();
$groupUserLink->setGroup($group);
$groupUserLink->setUser($user);
$groupUserLink->setRole("member");
$em->persist($groupUserLink);
$em->flush();