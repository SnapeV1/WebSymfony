<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8p3uXKq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8p3uXKq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8p3uXKq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8p3uXKq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8p3uXKq\App_KernelDevDebugContainer([
    'container.build_hash' => '8p3uXKq',
    'container.build_id' => '2f3db25d',
    'container.build_time' => 1701880364,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8p3uXKq');
