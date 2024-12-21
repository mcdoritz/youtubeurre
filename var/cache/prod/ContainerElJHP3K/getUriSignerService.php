<?php

namespace ContainerElJHP3K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUriSignerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UriSigner
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['uri_signer'] = $container->createProxy('UriSignerGhost95dd497', static fn () => \UriSignerGhost95dd497::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        return ($lazyLoad->__construct($container->getParameter('kernel.secret')) && false ?: $lazyLoad);
    }
}
