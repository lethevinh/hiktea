<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBAU2CTI\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBAU2CTI/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBAU2CTI.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBAU2CTI\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBAU2CTI\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BAU2CTI',
    'container.build_id' => 'e5f98dd6',
    'container.build_time' => 1561055081,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBAU2CTI');
