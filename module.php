<?php

use Psr\Container\ContainerInterface;
use RebelCode\EventManager\WordPress\Module\WpEventManagerModule;

return function(ContainerInterface $c) {
    return new WpEventManagerModule($c->get('container_factory'));
};
