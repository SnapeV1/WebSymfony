<?php

namespace ContainerWrRS6bX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JLc2OhJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JLc2OhJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JLc2OhJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'se' => ['privates', 'App\\Service\\UtilisateurService', 'getUtilisateurServiceService', true],
        ], [
            'se' => 'App\\Service\\UtilisateurService',
        ]);
    }
}