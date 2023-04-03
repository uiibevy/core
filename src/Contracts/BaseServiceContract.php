<?php

namespace Uiibevy\Core\Contracts;

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
     * @return \Uiibevy\Core\Contracts\ServiceContract
     *
     */
    public static function autoload(): ServiceContract;
}
