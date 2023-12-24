<?php

namespace ContainerKzogNx6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\UsersController' shared autowired service.
     *
     * @return \App\Controller\UsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\UsersController'] = $instance = new \App\Controller\UsersController(($container->privates['App\\Repository\\UsersRepository'] ?? $container->load('getUsersRepositoryService')), ($container->privates['App\\Repository\\PostsRepository'] ?? $container->load('getPostsRepositoryService')), ($container->privates['App\\Repository\\CommentsRepository'] ?? $container->load('getCommentsRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\UsersController', $container));

        return $instance;
    }
}
