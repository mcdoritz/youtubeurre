<?php

namespace ContainerElJHP3K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Die6BxeService extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.Die6Bxe' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.Die6Bxe'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Process\Messenger\RunProcessMessageHandler(), []);
    }
}
