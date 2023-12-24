<?php

namespace ContainerKzogNx6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_MappingConvertCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }
}
