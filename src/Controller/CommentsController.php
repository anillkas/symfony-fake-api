<?php

namespace App\Controller;

use App\Repository\CommentsRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CommentsController extends AbstractController
{
    private $commentsRepository;
    private $postsRepository;
    private $usersRepository;

    public function __construct(CommentsRepository $commentsRepository, UsersRepository $usersRepository, PostsRepository $postsRepository)
    {
        $this->commentsRepository = $commentsRepository;
        $this->usersRepository = $usersRepository;
        $this->postsRepository = $postsRepository;
    }

    /**
     * @Route("/comments",name="comments",methods={"GET"})
     */
    public function getAllComments(): JsonResponse
    {
        $comments = $this->commentsRepository->findAll();
        $commentData = array();
        foreach ($comments as $comment) {
            $commentData[] = array(
                "id" => $comment->getId(),
                "post_id" => $comment->getPostCommentId(),
                "email" => $comment->getEmail(),
                "body" => $comment->getBody()
            );
        }
        return new JsonResponse($commentData);
    }

    /**
     * @Route("/comments",name="add_comment",methods={"POST"})
     */
    public function addComments(Request $request): JsonResponse
    {
        $comment = json_decode($request->getContent(), true);
        $postId = $comment["post_id"];
        $email = $comment["email"];
        $body = $comment["body"];
        $postExist = $this->postsRepository->find($postId);
        $emailExist = $this->usersRepository->findBy(array("email" => $email));
        if (empty($postExist)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Email adresi uygun değil"));
        }
        if (empty($emailExist)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı.-2"));
        }

        if (empty($postId) || empty($email) || empty($body)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Boş alanlar mevcut"));
        }
        $this->commentsRepository->addComment($postId, $email, $body);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla eklendi."));

    }

    /**
     * @Route("/comments/{id}",name="get_comment",methods={"GET"})
     */
    public function getCommentsData($id): JsonResponse
    {
        $comment = $this->commentsRepository->find($id);
        if (empty($comment)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        return new JsonResponse(array(
            "id" => $comment->getId(),
            "post_id" => $comment->getPostCommentId(),
            "email" => $comment->getEmail(),
            "body" => $comment->getBody()
        ));
    }


    /**
     * @Route("/comments/{id}",name="edit_comment",methods={"PUT"})
     */
    public function editComments($id, Request $request): JsonResponse
    {
        $comment = $this->commentsRepository->find($id);
        if (empty($comment)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $data = json_decode($request->getContent(), true);
        empty($data["post_id"]) ? true : $comment->setPostCommentId($data["post_id"]);
        empty($data["email"]) ? true : $comment->setEmail($data["email"]);
        empty($data["body"]) ? true : $comment->setBody($data["body"]);
        $this->commentsRepository->editComment($comment);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla güncellendi."));

    }


    /**
     * @Route("/comments/{id}",name="delete_comment",methods={"DELETE"})
     */
    public function deleteComments($id): JsonResponse
    {
        $comment = $this->commentsRepository->find($id);
        if (empty($comment)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamdı."));
        }
        $this->commentsRepository->removeComment($comment);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla silindi."));
    }

    /**
     * @Route("/comments/{id}/users",name="get_comment_user",methods={"GET"})
     */
    public function getCommentUsers($id): JsonResponse
    {
        $user = $this->usersRepository->find($id);
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $comments = $this->commentsRepository->findBy(array("email" => $user->getEmail()));
        if (empty($comments)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $userCommentData = array();
        foreach ($comments as $comment) {
            $userCommentData[] = array(
                "user_id" => $user->getId(),
                "username" => $user->getUsername(),
                "email" => $user->getEmail(),
                "post_id" => $comment->getPostCommentId(),
                "body" => $comment->getBody(),
                "comment_id" => $comment->getId()
            );
        }
        return new JsonResponse($userCommentData);
    }

    /**
     * @Route("/comments/{id}/posts",name="get_comment_post",methods={"GET"})
     */
    public function getCommentsPosts($id): JsonResponse
    {
        $post = $this->postsRepository->find($id);
        if (empty($post)){
            return new JsonResponse(array("durum" => "hata","mesaj" => "Veri bulunamadı."));
        }
        $comments = $this->commentsRepository->findBy(array("postCommentId" => $post->getId()));
        $commentPostData = array();
        foreach ($comments as $comment){
            $commentPostData[] = array(
                "comment_id" => $comment->getId(),
                "post_id" => $comment->getPostCommentId(),
                "email" => $comment->getEmail(),
                "comment_body" => $comment->getBody(),
                "title" => $post->getTitle(),
            );
        }
        return new JsonResponse($commentPostData);
    }
}