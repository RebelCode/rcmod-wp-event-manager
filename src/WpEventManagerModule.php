<?php

namespace RebelCode\EventManager\Module;

use Dhii\Data\Container\ContainerFactoryInterface;
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
     * Constructor.
     *
     * @since [*next-version*]
     *
     * @param ContainerFactoryInterface $containerFactory The container factory.
     */
    public function __construct($containerFactory)
    {
        $this->_initModule($containerFactory, 'wp-events');
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
                'event-manager',
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
