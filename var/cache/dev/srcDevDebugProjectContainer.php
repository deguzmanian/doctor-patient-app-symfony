<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYzuKBWG\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYzuKBWG/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYzuKBWG.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYzuKBWG\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerYzuKBWG\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'YzuKBWG',
    'container.build_id' => '4808c847',
    'container.build_time' => 1533007407,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYzuKBWG');
