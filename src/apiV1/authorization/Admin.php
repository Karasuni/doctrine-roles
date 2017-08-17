<?php

namespace apiV1\authorization;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr\Join;

require_once __DIR__ . '/../../EntityManager.php';

class Admin
{
    static function isAdmin($userId):bool {
        $em = GetEntityManager();
        $qb = $em->createQueryBuilder();

        $qb->select('gu')
            ->from(GroupsUsers::class, 'gu')
            ->leftJoin(Group_::class, 'g', Join::WITH, 'gu.group = g.id')
            ->where('g.name = :group')
            ->andWhere('gu.user = :user')
            ->setParameter('group', 'admin')
            ->setParameter('user', $userId)
            ->setMaxResults(1);
        ;

        /** @var ArrayCollection|GroupsUsers[] $res */
        $resArray = $qb->getQuery()->getArrayResult();

        $res = count($resArray) != 0;

        return $res;

    }
}