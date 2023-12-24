<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comments
{
    /**
     * @ORM\Column(type="integer",name="id")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;


    /**
     * @ORM\Column(type="integer",name="post_id")
     */
    private $postCommentId;

    /**
     * @ORM\Column(type="text",name="email")
     */
    private $email;

    /**
     * @ORM\Column(type="text",name="body")
     */
    private $body;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPostCommentId()
    {
        return $this->postCommentId;
    }

    /**
     * @param mixed $postCommentId
     */
    public function setPostCommentId($postCommentId): void
    {
        $this->postCommentId = $postCommentId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }





}