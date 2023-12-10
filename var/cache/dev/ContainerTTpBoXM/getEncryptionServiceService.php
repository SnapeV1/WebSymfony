<?php

namespace ContainerTTpBoXM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEncryptionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\EncryptionService' shared autowired service.
     *
     * @return \App\Service\EncryptionService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'EncryptionService.php';

        return $container->privates['App\\Service\\EncryptionService'] = new \App\Service\EncryptionService();
    }
}
