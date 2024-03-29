<?php

namespace ContainerTTpBoXM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DbYsZSVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DbYsZSV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DbYsZSV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
            'managerRegistry' => '?',
            'repo' => 'App\\Repository\\FormationRepository',
        ]);
    }
}
