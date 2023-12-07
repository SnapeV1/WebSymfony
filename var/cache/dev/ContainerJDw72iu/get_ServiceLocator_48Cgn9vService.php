<?php

namespace ContainerJDw72iu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_48Cgn9vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.48Cgn9v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.48Cgn9v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
