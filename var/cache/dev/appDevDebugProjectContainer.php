<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQveotje\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQveotje/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQveotje.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQveotje\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQveotje\appDevDebugProjectContainer([
    'container.build_hash' => 'Qveotje',
    'container.build_id' => '35d19725',
    'container.build_time' => 1597695209,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQveotje');
