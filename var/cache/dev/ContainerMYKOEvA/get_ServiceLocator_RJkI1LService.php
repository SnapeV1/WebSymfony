<?php

namespace ContainerMYKOEvA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RJkI1LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RJk_i1L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RJk_i1L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'membreRepo' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\GroupsRepository', 'getGroupsRepositoryService', true],
        ], [
            'entityManager' => '?',
            'manager' => '?',
            'membreRepo' => 'App\\Repository\\MembreRepository',
            'repo' => 'App\\Repository\\GroupsRepository',
        ]);
    }
}
