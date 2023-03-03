<?php

namespace ContainerOqKVMDN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationPull_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_pull.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.translation_pull.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:pull', [], 'Pull translations from a given provider.', false, function () use ($container): \Symfony\Component\Translation\Command\TranslationPullCommand {
            return ($container->privates['console.command.translation_pull'] ?? $container->load('getConsole_Command_TranslationPullService'));
        });
    }
}
