<?php

namespace ContainerIIhv7Rh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArchivedIndexControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cKEcjF9.App\Controller\ArchivedIndexController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cKEcjF9.App\\Controller\\ArchivedIndexController::index()'] = ($container->privates['.service_locator.cKEcjF9'] ?? $container->load('get_ServiceLocator_CKEcjF9Service'))->withContext('App\\Controller\\ArchivedIndexController::index()', $container);
    }
}