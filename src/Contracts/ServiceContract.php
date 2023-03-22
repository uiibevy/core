<?php

namespace Uiibevy\Core\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ServiceContract
{
    /**
     * @return string
     */
    public static function guessModelName(): string;

    /**
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Concerns\ServiceableModelContract
     */
    public function newModelInstance(): Model|ServiceableModelContract;

    /**
     * @return \Illuminate\Database\Eloquent\Builder|null
     */
    public function query(): Builder|null;

    /**
     * @param int|string $id
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Concerns\ServiceableModelContract|null
     */
    public function find(int|string $id): Model|ServiceableModelContract|null;

    /**
     * @param int|string $id
     *
     * @return bool
     */
    public function exists(int|string $id): bool;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function all(): Collection;

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Concerns\ServiceableModelContract|null
     */
    public function create(array $attributes): Model|ServiceableModelContract|null;

    /**
     * @param int|string $id
     * @param array      $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Concerns\ServiceableModelContract|null
     */
    public function update(int|string $id, array $attributes): Model|ServiceableModelContract|null;

    /**
     * @param int|string $id
     *
     * @return bool
     */
    public function delete(int|string $id): bool;
}
