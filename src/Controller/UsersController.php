<?php

namespace App\Controller;

use App\Repository\CommentsRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class UsersController extends AbstractController
{
    private $postsRepository;
    private $usersRepository;
    private $commentsRepository;

    public function __construct(UsersRepository $usersRepository, PostsRepository $postsRepository,CommentsRepository $commentsRepository)
    {
        $this->usersRepository = $usersRepository;
        $this->postsRepository = $postsRepository;
        $this->commentsRepository = $commentsRepository;
    }

    /**
     * @Route("/users",name="get_users",methods={"GET"})
     */
    public function getAllUsers(): JsonResponse
    {
        $users = $this->usersRepository->findAll();
        $usersData = array();
        foreach ($users as $user) {
            $usersData[] = array(
                "id" => $user->getId(),
                "username" => $user->getUsername(),
                "email" => $user->getEmail()
            );
        }
        return new JsonResponse($usersData);
    }

    /**
     * @Route("/users",name="add_user",methods={"POST"})
     */
    public function addUsers(Request $request): JsonResponse
    {
        $user = json_decode($request->getContent(), true);
        $username = $user["username"];
        $email = $user["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Email adresi uygun değil"));
        }
        if (empty($username) || empty($email)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Boş alanlar mevcut."));
        }
        $user = $this->usersRepository->findBy(array("email" => $email));
        if (!empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Böyle bir kullanıcı mevcut"));
        } else {
            $this->usersRepository->addUsers($username, $email);
            return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla eklendi."));
        }
    }


    /**
     * @Route("/users/{id}",name="get_user",methods={"GET"})
     */
    public function getUsersData($id): JsonResponse
    {
        $user = $this->usersRepository->find($id);
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }

        return new JsonResponse(array(
            "id" => $user->getId(),
            "username" => $user->getUsername(),
            "email" => $user->getEmail()
        ));
    }


    /**
     * @Route("/users/{id}",name="edit_user",methods={"PUT"})
     */
    public function editUsers($id, Request $request): JsonResponse
    {
        $user = $this->usersRepository->find($id);
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $data = json_decode($request->getContent(), true);
        empty($data["username"]) ? true : $user->setUsername($data["username"]);
        empty($data["email"]) ? true : $user->setEmail($data["email"]);

        $editUser = $this->usersRepository->editUser($user);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla güncellendi."));

    }


    /**
     * @Route("/users/{id}",name="delete_user",methods={"DELETE"})
     */
    public function deleteUser($id): JsonResponse
    {
        $user = $this->usersRepository->findOneBy(array("id" => $id));
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı"));
        }
        $this->usersRepository->removeUser($user);
        return new JsonResponse(array("durum" => "basarili", "mesaj" => "Başarıyla silindi."));
    }


    /**
     * @Route("/users/{id}/posts",name="user_post_get",methods={"GET"})
     */
    public function getUsersPosts($id): JsonResponse
    {
        $user = $this->usersRepository->findOneBy(array("id" => $id));
        if (empty($user)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $posts = $this->postsRepository->findBy(array("userId" => $id));
        if (empty($posts)) {
            return new JsonResponse(array("durum" => "hata", "mesaj" => "Veri bulunamadı."));
        }
        $userPostsData = array();
        foreach ($posts as $post) {
            $userPostsData[] = array(
                "user_id" => $post->getUserId(),
                "username" => $user->getUsername(),
                "email" => $user->getEmail(),
                "title" => $post->getTitle(),
                "body" => $post->getBody(),
                "post_id" => $post->getId()
            );
        }
        return new JsonResponse($userPostsData);
    }

    /**
     * @Route("/users/{id}/comments",name="user_comment_get",methods={"GET"})
     */
    public function getUsersComments($id): JsonResponse
    {
        $user = $this->usersRepository->find($id);
        if (empty($user)){
            return new JsonResponse(array("durum" => "hata","mesaj" => "Veri bulunamadı."));
        }
        $comments = $this->commentsRepository->findBy(array("email" => $user->getEmail()));
        if (empty($comments)){
            return new JsonResponse(array("durum" => "hata","mesaj" => "Veri bulunamadı."));
        }
        $userCommentData = array();
        foreach ($comments as $comment){
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
}