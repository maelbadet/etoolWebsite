<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOP33KYQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOP33KYQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOP33KYQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOP33KYQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOP33KYQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'OP33KYQ',
    'container.build_id' => 'f72a929f',
    'container.build_time' => 1716914886,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOP33KYQ');
