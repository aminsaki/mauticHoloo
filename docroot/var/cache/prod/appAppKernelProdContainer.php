<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOTXsDqx\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOTXsDqx/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerOTXsDqx.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerOTXsDqx\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerOTXsDqx\appAppKernelProdContainer([
    'container.build_hash' => 'OTXsDqx',
    'container.build_id' => 'dd70e749',
    'container.build_time' => 1693221774,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOTXsDqx');