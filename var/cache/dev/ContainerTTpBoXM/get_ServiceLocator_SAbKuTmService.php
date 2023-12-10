<?php

namespace ContainerTTpBoXM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SAbKuTmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sAbKuTm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sAbKuTm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'man' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'man' => '?',
            'repo' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
