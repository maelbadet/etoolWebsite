<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTrqIUxF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTrqIUxF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTrqIUxF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTrqIUxF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTrqIUxF\App_KernelDevDebugContainer([
    'container.build_hash' => 'TrqIUxF',
    'container.build_id' => '3d575a89',
    'container.build_time' => 1716582104,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTrqIUxF');
