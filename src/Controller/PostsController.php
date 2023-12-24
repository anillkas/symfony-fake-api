<?php

namespace App\Controller;

use App\Repository\CommentsRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PostsController extends AbstractController
{
    private $postsRepository;
    private $usersRepository;
    private $commentsRepository;

    public function __construct(PostsRepository $postsRepository, UsersRepository $usersRepository, CommentsRepository $commentsRepository)
    {
        $this->postsRepository = $postsRepository;
        $this->usersRepository = $usersRepository;
        $this->commentsRepository = $commentsRepository;
    }

    /**
     * @Route("/posts",name="get_posts",methods={"GET"})
     */
    public function getAllPosts(): JsonResponse
    {
        $posts = $this->postsRepository->findAll();
        $postData = [];
        foreach ($posts as $post) {
            $postData[] = [
                "id" => $post->getId(),
                "title" => $post->getTitle(),
                "body" => $post->getBody(),
                "user_id" => $post->getUserId()
            ];
        }
        return new JsonResponse($postData);
    }


    /**
     * @Route("/posts",name="add_post",methods={"POST"})
     */
    public function addPosts(Request $request)
    {
        $post = json_decode($request->getContent(), true);
        $title = $post["title"];
        $body = $post["body"];
        $userId = $post["userId"];
        if (empty($title) || empty($body) || empty($userId)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Boş alanlar mevcut."));
        }
        $user = $this->usersRepository->findOneBy(array("id" => $userId));
        if (!isset($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Böyle bir kullanıcı bulunamadı"));
        } else {
            $this->postsRepository->addPosts($title, $body, $userId);
            return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla eklendi."));
        }

    }

    /**
     * @Route("/posts/{id}",name="get_post",methods={"GET"})
     */
    public function getPostData(int $id): JsonResponse
    {
        $post = $this->postsRepository->find($id);
        if (empty($post)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Böyle bir veri bulunamadı."));
        }

        return new JsonResponse(array(
            "id" => $post->getId(),
            "title" => $post->getTitle(),
            "body" => $post->getBody(),
            "user_id" => $post->getUserId()
        ));
    }


    /**
     * @Route("/posts/{id}",name="edit_post",methods={"PUT"})
     */
    public function editPosts($id, Request $request): JsonResponse
    {
        $post = $this->postsRepository->findOneBy(array("id" => $id));
        $data = json_decode($request->getContent(), true);

        empty($data["title"]) ? true : $post->setTitle($data["title"]);
        empty($data["body"]) ? true : $post->setBody($data["body"]);
        empty($data["userId"]) ? true : $post->setUserId($data["userId"]);

        $editPost = $this->postsRepository->editPost($post);

        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla güncellendi."));
    }


    /**
     * @Route("/posts/{id}",name="delete_post",methods={"DELETE"})
     */
    public function deletePosts($id): JsonResponse
    {
        $post = $this->postsRepository->findOneBy(array("id" => $id));
        if (empty($post)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $this->postsRepository->removePost($post);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla silindi."));
    }


    /**
     * @Route("/posts/{id}/users",name="get_post_user",methods={"GET"})
     */
    public function getPostsUsers($id): JsonResponse
    {
        $posts = $this->postsRepository->findBy(array("userId" => $id));
        if (empty($posts)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $postUserData = array();
        $user = $this->usersRepository->findOneBy(array("id" => $id));
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        foreach ($posts as $post) {
            $postUserData[] = array(
                "user_id" => $user->getId(),
                "post_id" => $post->getId(),
                "username" => $user->getUsername(),
                "email" => $user->getEmail(),
                "title" => $post->getTitle(),
                "body" => $post->getBody(),
            );
        }
        return new JsonResponse($postUserData);
    }

    /**
     * @Route("/posts/{id}/comments",name="get_post_comments",methods={"GET"})
     */
    public function getPostComments($id): JsonResponse
    {
        $comments = $this->commentsRepository->findBy(array("postCommentId" => $id));
        if (empty($comments)){
            return new JsonResponse(array("durum" => "hata","mesaj" => "Veri bulunamadı."));
        }
        $post = $this->postsRepository->find($id);
        if (empty($post)){
            return new JsonResponse(array("durum" => "hata","mesaj" => "Veri bulunamadı."));
        }
        $postCommentsData = array();
        foreach ($comments as $comment){
            $postCommentsData[] = array(
                "post_id" => $post->getId(),
                "comment_id" => $comment->getId(),
                "title" => $post->getTitle(),
                "post" => $post->getBody(),
                "email" => $comment->getEmail(),
                "comment" => $comment->getBody()
            );
        }
        return new JsonResponse($postCommentsData);
    }
}