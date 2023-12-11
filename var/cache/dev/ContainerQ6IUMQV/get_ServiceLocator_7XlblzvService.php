<?php

namespace ContainerQ6IUMQV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7XlblzvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7Xlblzv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Xlblzv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'conversationRepository' => ['privates', 'App\\Repository\\ConversationRepository', 'getConversationRepositoryService', true],
            'encryptionService' => ['privates', 'App\\Service\\EncryptionService', 'getEncryptionServiceService', true],
        ], [
            'conversationRepository' => 'App\\Repository\\ConversationRepository',
            'encryptionService' => 'App\\Service\\EncryptionService',
        ]);
    }
}