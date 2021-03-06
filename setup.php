<?php

use apiV1\authorization\Group_;
use apiV1\authorization\GroupsUsers;
use apiV1\authorization\User;

require_once __DIR__ . "/src/EntityManager.php";

$em = getEntityManager();

// Create group "admin"
$group = new Group_();
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

// Creat user "jerryc", not a member of the group "admin"
$user = new User();
$user->setId("jerryc");
$user->setFirstName("Jerry");
$user->setLastName("Can");
$em->persist($user);
$em->flush();