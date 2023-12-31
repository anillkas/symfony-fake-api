<?php

namespace ContainerKzogNx6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UsersRepository' shared autowired service.
     *
     * @return \App\Repository\UsersRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->privates['App\\Repository\\UsersRepository'])) {
            return $container->privates['App\\Repository\\UsersRepository'];
        }

        return $container->privates['App\\Repository\\UsersRepository'] = new \App\Repository\UsersRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')), $a);
    }
}
