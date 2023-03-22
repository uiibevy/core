<?php

namespace Uiibevy\Core\Services;

use Uiibevy\Core\Concerns\AutomaticCoreService;
use Uiibevy\Core\Concerns\BaseServiceContract;
use Uiibevy\Core\Concerns\ServiceContract;
use Uiibevy\Core\Concerns\ServiceModelBind;
use Uiibevy\Core\Concerns\ServiceQueries;

class Service implements ServiceContract, BaseServiceContract
{
    use AutomaticCoreService, ServiceModelBind, ServiceQueries;

    protected static array $attributes;

    public function __construct(...$attributes)
    {
        self::$attributes = $attributes;
    }
}
