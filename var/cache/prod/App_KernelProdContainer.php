<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKzogNx6\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKzogNx6/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerKzogNx6.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerKzogNx6\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerKzogNx6\App_KernelProdContainer([
    'container.build_hash' => 'KzogNx6',
    'container.build_id' => '042488c0',
    'container.build_time' => 1703405164,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKzogNx6');
