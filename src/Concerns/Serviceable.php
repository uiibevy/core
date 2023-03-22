<?php

namespace Uiibevy\Core\Concerns;
/**
 * @mixin \Uiibevy\Core\Concerns\ServiceableModelContract
 */
trait Serviceable
{
    public function isServiceable(): bool
    {
        return $this instanceof ServiceableModelContract;
    }
}
