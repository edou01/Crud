<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJkm4rd9\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJkm4rd9/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJkm4rd9.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJkm4rd9\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJkm4rd9\appProdProjectContainer([
    'container.build_hash' => 'Jkm4rd9',
    'container.build_id' => 'dbf2a9ab',
    'container.build_time' => 1557657158,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJkm4rd9');
