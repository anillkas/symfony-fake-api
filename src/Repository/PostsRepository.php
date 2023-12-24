<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class PostsRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Posts::class);
        $this->manager = $manager;
    }

    public function addPosts($title, $body, $userId)
    {
        $posts = new Posts();
        $posts->setBody($body);
        $posts->setTitle($title);
        $posts->setUserId($userId);
        $this->manager->persist($posts);
        $this->manager->flush();
    }
    public function editPost(Posts $posts):Posts
    {
        $this->manager->persist($posts);
        $this->manager->flush();

        return $posts;
    }

    public function removePost(Posts $posts)
    {
        $this->manager->remove($posts);
        $this->manager->flush();
    }

}