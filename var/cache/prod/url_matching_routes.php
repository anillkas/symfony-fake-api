<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/comments' => [
            [['_route' => 'comments', '_controller' => 'App\\Controller\\CommentsController::getAllComments'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_comment', '_controller' => 'App\\Controller\\CommentsController::addComments'], null, ['POST' => 0], null, false, false, null],
        ],
        '/guide' => [[['_route' => 'guide', '_controller' => 'App\\Controller\\GuideController::guide'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomePageController::homePage'], null, null, null, false, false, null]],
        '/posts' => [
            [['_route' => 'get_posts', '_controller' => 'App\\Controller\\PostsController::getAllPosts'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_post', '_controller' => 'App\\Controller\\PostsController::addPosts'], null, ['POST' => 0], null, false, false, null],
        ],
        '/users' => [
            [['_route' => 'get_users', '_controller' => 'App\\Controller\\UsersController::getAllUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_user', '_controller' => 'App\\Controller\\UsersController::addUsers'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/comments/([^/]++)(?'
                    .'|(*:28)'
                    .'|/(?'
                        .'|users(*:44)'
                        .'|posts(*:56)'
                    .')'
                .')'
                .'|/posts/([^/]++)(?'
                    .'|(*:83)'
                    .'|/(?'
                        .'|users(*:99)'
                        .'|comments(*:114)'
                    .')'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:142)'
                    .'|/(?'
                        .'|posts(*:159)'
                        .'|comments(*:175)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [
            [['_route' => 'get_comment', '_controller' => 'App\\Controller\\CommentsController::getCommentsData'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'edit_comment', '_controller' => 'App\\Controller\\CommentsController::editComments'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentsController::deleteComments'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        44 => [[['_route' => 'get_comment_user', '_controller' => 'App\\Controller\\CommentsController::getCommentUsers'], ['id'], ['GET' => 0], null, false, false, null]],
        56 => [[['_route' => 'get_comment_post', '_controller' => 'App\\Controller\\CommentsController::getCommentsPosts'], ['id'], ['GET' => 0], null, false, false, null]],
        83 => [
            [['_route' => 'get_post', '_controller' => 'App\\Controller\\PostsController::getPostData'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'edit_post', '_controller' => 'App\\Controller\\PostsController::editPosts'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_post', '_controller' => 'App\\Controller\\PostsController::deletePosts'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        99 => [[['_route' => 'get_post_user', '_controller' => 'App\\Controller\\PostsController::getPostsUsers'], ['id'], ['GET' => 0], null, false, false, null]],
        114 => [[['_route' => 'get_post_comments', '_controller' => 'App\\Controller\\PostsController::getPostComments'], ['id'], ['GET' => 0], null, false, false, null]],
        142 => [
            [['_route' => 'get_user', '_controller' => 'App\\Controller\\UsersController::getUsersData'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'edit_user', '_controller' => 'App\\Controller\\UsersController::editUsers'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UsersController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        159 => [[['_route' => 'user_post_get', '_controller' => 'App\\Controller\\UsersController::getUsersPosts'], ['id'], ['GET' => 0], null, false, false, null]],
        175 => [
            [['_route' => 'user_comment_get', '_controller' => 'App\\Controller\\UsersController::getUsersComments'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
