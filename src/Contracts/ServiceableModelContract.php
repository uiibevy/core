<?php

namespace Uiibevy\Core\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder as BuilderContract;

interface ServiceableModelContract
{
    public function query(): BuilderContract;

    public function getKey(): int|string;

    public function getKeyName(): string;

    public function getTable(): string;

    public function isServiceable(): bool;
}
