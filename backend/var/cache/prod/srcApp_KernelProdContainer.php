<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVSA0JKB\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVSA0JKB/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerVSA0JKB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerVSA0JKB\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerVSA0JKB\srcApp_KernelProdContainer([
    'container.build_hash' => 'VSA0JKB',
    'container.build_id' => 'b971da58',
    'container.build_time' => 1561048658,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVSA0JKB');
