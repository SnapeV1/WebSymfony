<?php

namespace ContainerIfnuA2U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ul5UmhVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ul5UmhV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ul5UmhV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lineorderRepository' => ['privates', 'App\\Repository\\LineorderRepository', 'getLineorderRepositoryService', true],
            'man' => ['services', 'doctrine', 'getDoctrineService', false],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'lineorderRepository' => 'App\\Repository\\LineorderRepository',
            'man' => '?',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
