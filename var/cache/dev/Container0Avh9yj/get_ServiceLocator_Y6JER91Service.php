<?php

namespace Container0Avh9yj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y6JER91Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y6JER91' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y6JER91'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formation' => ['privates', '.errored..service_locator.Y6JER91.App\\Entity\\Formation', NULL, 'Cannot autowire service ".service_locator.Y6JER91": it references class "App\\Entity\\Formation" but no such service exists.'],
        ], [
            'formation' => 'App\\Entity\\Formation',
        ]);
    }
}
