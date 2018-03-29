<?php

namespace RebelCode\EventManager\Module;

use Dhii\Data\Container\ContainerFactoryInterface;
use Dhii\EventManager\WordPress\WpEventManager;
use Psr\Container\ContainerInterface;
use RebelCode\Modular\Module\AbstractBaseModule;

/**
 * A module that provides a WordPress event manager.
 *
 * @since [*next-version*]
 */
class WpEventManagerModule extends AbstractBaseModule
{
    /**
     * The key of the module.
     *
     * @since [*next-version*]
     */
    const MODULE_KEY = 'wp_events';

    /**
     * Constructor.
     *
     * @since [*next-version*]
     *
     * @param ContainerFactoryInterface $containerFactory The container factory.
     */
    public function __construct($containerFactory)
    {
        $this->_initModule($containerFactory, static::MODULE_KEY);
    }

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     */
    public function setup()
    {
        return $this->_createContainer(
            [
                'event_manager' => function (ContainerInterface $c) {
                    return new WpEventManager();
                },
            ]
        );
    }

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     */
    public function run(ContainerInterface $c = null)
    {
    }
}
