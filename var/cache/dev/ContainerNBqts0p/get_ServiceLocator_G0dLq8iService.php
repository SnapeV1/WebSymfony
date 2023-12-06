<?php

namespace ContainerNBqts0p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G0dLq8iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G0dLq8i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G0dLq8i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
            'service' => ['privates', 'App\\Service\\UtilisateurService', 'getUtilisateurServiceService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\UtilisateurRepository',
            'service' => 'App\\Service\\UtilisateurService',
        ]);
    }
}
