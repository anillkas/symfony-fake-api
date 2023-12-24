<?php

namespace App\Repository;

use App\Entity\Comments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class CommentsRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Comments::class);
        $this->manager = $manager;
    }

    public function addComment($postId, $email, $body)
    {
        $comment = new Comments();
        $comment->setPostCommentId($postId);
        $comment->setEmail($email);
        $comment->setBody($body);
        $this->manager->persist($comment);
        $this->manager->flush();
    }

    public function editComment(Comments $comments): Comments
    {
        $this->manager->persist($comments);
        $this->manager->flush();
        return $comments;
    }

    public function removeComment(Comments $comments)
    {
        $this->manager->remove($comments);
        $this->manager->flush();
    }
}