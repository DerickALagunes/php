<?php

// src/AppBundle/Repository/UserRepository.php
namespace Liverpool\tiendaBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class usuarioRepository extends EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.usuario = :username AND u.contrasena = :contrasena')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    public function loadUser($username, $pass)
    {
        return $this->createQueryBuilder('u')
            ->where('u.usuario = :username AND u.contrasena = :contrasena')
            ->setParameter('username', $username)
            ->setParameter('contrasena', $pass)
            ->getQuery()
            ->getOneOrNullResult();
    }

}