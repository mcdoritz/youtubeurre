<?php

namespace ContainerElJHP3K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MediaRepository' shared autowired service.
     *
     * @return \App\Repository\MediaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MediaRepository'] = new \App\Repository\MediaRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}