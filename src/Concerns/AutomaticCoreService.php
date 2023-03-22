<?php

namespace Uiibevy\Core\Concerns;

trait AutomaticCoreService
{
    protected static string $abstract;

    /**
     * Register a service
     *
     * @param mixed ...$attributes
     *
     * @return void
     */
    public static function register(...$attributes): void
    {
        app()->bind(self::$abstract, function () use ($attributes) {
            return new static(...$attributes);
        });
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public static function autoload(): ServiceContract
    {
        return app()->make(self::$abstract);
    }
}
