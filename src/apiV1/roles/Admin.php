<?php

namespace apiV1\roles;

require_once __DIR__ . '/../../EntityManager.php';

class Admin
{
    static function isAdmin($userId):bool {
        $em = GetEntityManager();
        $qb = $em->createQueryBuilder();

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
         * TODO return EXISTS or COUNT > 0 for User $userId MEMBER OF Group "admin"
         * This function should be a single request on the database.
         * Use DQL's MEMBER OF otherwise two inner joins are required <> Doctrine ORM Methodology
         * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


        /* ---------------------------------------------------
         * 1. Get group Admin using Query Builder
         * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/query-builder.html
         */
        $qb ->select('g')
            ->from(Group::class, 'g')
            ->where('g.name = ?1')
            ->setParameter(1, 'admin');
        $query = $qb->getQuery();

        /** @var Group $adminGroup */
        $adminGroup = $query->getSingleResult();


        /* ---------------------------------------------------
         * 2. Get group Admin using $em's find
         */
        $adminGroup2 = $em->getRepository(Group::class)
            ->findOneBy(array('name' => 'admin'));


        /* ---------------------------------------------------
         * 3. Get group Admin using DQL
         * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/dql-doctrine-query-language.html
         */
        // TODO : Group is a reserved keyword. Quoting using ` or \" does not solve issue.
        $qdl = "SELECT g.id FROM `Group` g WHERE g.name = 'admin'";
        /** @var Group $adminGroup3 */
//        $adminGroup3 = $em->createQuery($qdl)->getSingleResult();


        return false;

    }
}