<?php

namespace Container0Avh9yj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TrJnw54Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.trJnw54' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.trJnw54'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ProductRepository',
        ]);
    }
}