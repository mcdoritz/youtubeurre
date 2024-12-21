<?php

namespace ContainerIIhv7Rh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddMediaListControlleraddService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y_ywWFe.App\Controller\AddMediaListController::add()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y_ywWFe.App\\Controller\\AddMediaListController::add()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emi' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mediaListManager' => ['privates', 'App\\Service\\MediaListManager', 'getMediaListManagerService', true],
            'fileManager' => ['privates', 'App\\Service\\FileManager', 'getFileManagerService', true],
        ], [
            'emi' => '?',
            'mediaListManager' => 'App\\Service\\MediaListManager',
            'fileManager' => 'App\\Service\\FileManager',
        ]))->withContext('App\\Controller\\AddMediaListController::add()', $container);
    }
}
