<?php

namespace ContainerJDw72iu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JdGgftXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JdGgftX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JdGgftX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
            'manager' => '?',
            'repo' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
