<?php

namespace Uiibevy\Core\Exceptions;

use Exception;

class BadModelClassImplementationException extends Exception
{
    public function __construct(string $class, string $interface)
    {
        parent::__construct("The model {$class} must implement the $interface interface.");
    }
}
