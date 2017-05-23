<?php

// src/AppBundle/Repository/UserRepository.php
namespace Liverpool\tiendaBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($username, $pass)
    {
        return $this->createQueryBuilder('u')
            ->where('u.usuario = :username AND u.contrasena = :contrasena')
            ->setParameter('username', $username)
            ->setParameter('contrasena', $pass)
            ->getQuery()
            ->getOneOrNullResult();
    }

}