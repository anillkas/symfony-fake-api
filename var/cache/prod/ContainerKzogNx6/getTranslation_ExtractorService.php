<?php

namespace ContainerKzogNx6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ExtractorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService'))));

        return $instance;
    }
}
