<?php

namespace Uiibevy\Core\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Uiibevy\Core\Contracts\ServiceableModelContract;
use Uiibevy\Core\Exceptions\BadModelClassImplementationException;

/**
 * @mixin \Uiibevy\Core\Contracts\ServiceContract
 */
trait ServiceModelBind
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder|null
     * @throws \Uiibevy\Core\Exceptions\BadModelClassImplementationException
     */
    public function query(): Builder|null
    {
        return $this->newModelInstance()->query();
    }

    /**
     * @param ...$attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Contracts\ServiceableModelContract
     * @throws \Uiibevy\Core\Exceptions\BadModelClassImplementationException
     */
    public function newModelInstance(...$attributes): Model|ServiceableModelContract
    {
        $class = self::guessModelName();
        $instance = new $class(...$attributes);
        if (!($instance instanceof ServiceableModelContract)) {
            throw new BadModelClassImplementationException($class, ServiceableModelContract::class);
        }
        if (!($instance instanceof Model)) {
            throw new BadModelClassImplementationException($class, Model::class);
        }
        return $instance;
    }

    /**
     * @return string
     */
    public static function guessModelName(): string
    {
        return str(get_called_class())->replace('Service', '')->explode('\\')->last();
    }
}
