<?php

namespace ContainerZlRNtJ5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lt63sAHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lt63sAH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lt63sAH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
            'service' => ['privates', 'App\\Service\\UtilisateurService', 'getUtilisateurServiceService', true],
        ], [
            'repo' => 'App\\Repository\\UtilisateurRepository',
            'service' => 'App\\Service\\UtilisateurService',
        ]);
    }
}
