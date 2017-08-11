<?php

namespace apiV1\roles;

require_once __DIR__ . '/../../EntityManager.php';

class Admin
{
    static function isAdmin($userId):bool {

        $em = GetEntityManager();

        return false;

    }
}