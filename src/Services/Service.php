<?php

namespace Uiibevy\Core\Services;

use Uiibevy\Core\Concerns\AutomaticCoreService;
use Uiibevy\Core\Concerns\ServiceModelBind;
use Uiibevy\Core\Concerns\ServiceQueries;
use Uiibevy\Core\Contracts\BaseServiceContract;
use Uiibevy\Core\Contracts\ServiceContract;

class Service implements ServiceContract, BaseServiceContract
{
    use AutomaticCoreService, ServiceModelBind, ServiceQueries;

    protected static array $attributes;

    public function __construct(...$attributes)
    {
        self::$attributes = $attributes;
    }
}
