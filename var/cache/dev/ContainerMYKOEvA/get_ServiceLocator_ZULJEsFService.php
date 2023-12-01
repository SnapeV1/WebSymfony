<?php

namespace ContainerMYKOEvA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZULJEsFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZULJEsF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZULJEsF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formationRepository' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
        ], [
            'formationRepository' => 'App\\Repository\\FormationRepository',
        ]);
    }
}
