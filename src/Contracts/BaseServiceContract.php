<?php

namespace Uiibevy\Core\Concerns;

interface BaseServiceContract
{
    /**
     * Register a service
     *
     * @param mixed ...$attributes
     *
     * @return void
     */
    public static function register(...$attributes): void;

    /**
     * Autoload a service
     *
     * @return \Uiibevy\Core\Concerns\ServiceContract
     *
     */
    public static function autoload(): ServiceContract;
}
