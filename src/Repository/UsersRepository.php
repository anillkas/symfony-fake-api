<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class UsersRepository extends ServiceEntityRepository
{
    private $manager;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Users::class);
        $this->manager = $manager;
    }

    public function addUsers($username,$email)
    {
        $user = new Users();
        $user->setUsername($username);
        $user->setEmail($email);
        $this->manager->persist($user);
        $this->manager->flush();
    }

    public function editUser(Users $users):Users
    {
        $this->manager->persist($users);
        $this->manager->flush();
        return $users;
    }


    public function removeUser(Users $users)
    {
        $this->manager->remove($users);
        $this->manager->flush();
    }
}