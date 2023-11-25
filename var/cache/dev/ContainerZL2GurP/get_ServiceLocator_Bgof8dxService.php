<?php

namespace ContainerZL2GurP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bgof8dxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bgof8dx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bgof8dx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\EventUserRepository', 'getEventUserRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\EventUserRepository',
        ]);
    }
}
