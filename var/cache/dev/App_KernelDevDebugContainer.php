<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXNMILUm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXNMILUm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXNMILUm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXNMILUm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXNMILUm\App_KernelDevDebugContainer([
    'container.build_hash' => 'XNMILUm',
    'container.build_id' => '4ded9f0b',
    'container.build_time' => 1680906879,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXNMILUm');
