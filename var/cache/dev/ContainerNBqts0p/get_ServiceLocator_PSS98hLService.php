<?php

namespace ContainerNBqts0p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PSS98hLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PSS98hL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PSS98hL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'man' => ['services', 'doctrine', 'getDoctrineService', false],
            'service' => ['privates', 'App\\Service\\UtilisateurService', 'getUtilisateurServiceService', true],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
            'man' => '?',
            'service' => 'App\\Service\\UtilisateurService',
        ]);
    }
}
