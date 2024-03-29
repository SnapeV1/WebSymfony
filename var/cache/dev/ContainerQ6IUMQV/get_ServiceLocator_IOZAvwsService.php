<?php

namespace ContainerQ6IUMQV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IOZAvwsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IOZAvws' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IOZAvws'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serviceMail' => ['privates', 'App\\Service\\UtilisateurService', 'getUtilisateurServiceService', true],
        ], [
            'serviceMail' => 'App\\Service\\UtilisateurService',
        ]);
    }
}
