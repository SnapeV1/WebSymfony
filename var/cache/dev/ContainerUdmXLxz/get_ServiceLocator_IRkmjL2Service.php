<?php

namespace ContainerUdmXLxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IRkmjL2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iRkmjL2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iRkmjL2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventAdminRepo' => ['privates', 'App\\Repository\\EventAdminRepository', 'getEventAdminRepositoryService', true],
            'eventUserRepo' => ['privates', 'App\\Repository\\EventUserRepository', 'getEventUserRepositoryService', true],
        ], [
            'eventAdminRepo' => 'App\\Repository\\EventAdminRepository',
            'eventUserRepo' => 'App\\Repository\\EventUserRepository',
        ]);
    }
}
