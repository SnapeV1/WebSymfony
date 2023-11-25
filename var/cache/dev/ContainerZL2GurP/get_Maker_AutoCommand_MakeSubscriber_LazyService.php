<?php

namespace ContainerZL2GurP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeSubscriber_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_subscriber.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.maker.auto_command.make_subscriber.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:subscriber', [], 'Creates a new event subscriber class', false, #[\Closure(name: 'maker.auto_command.make_subscriber', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_subscriber'] ?? $container->load('getMaker_AutoCommand_MakeSubscriberService'));
        });
    }
}
