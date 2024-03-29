<?php

namespace ContainerTTpBoXM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KddVKJ4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kddVKJ4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kddVKJ4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\EventUserRepository', 'getEventUserRepositoryService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\EventUserRepository',
        ]);
    }
}
