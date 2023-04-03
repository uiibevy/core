<?php

namespace Uiibevy\Core\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use UiiBevy\Core\Contracts\ServiceableModelContract;
use Uiibevy\Core\Exceptions\BadModelClassImplementationException;

/**
 * @mixin \Uiibevy\Core\Contracts\ServiceContract
 * @mixin \Uiibevy\Core\Contracts\BaseServiceContract
 */
trait ServiceQueries
{
    /**
     * @param int|string $id
     *
     * @return bool
     */
    public function exists(int|string $id): bool
    {
        try {
            return $this->query()->where('id', $id)->exists();
        } catch (BadModelClassImplementationException) {
            return false;
        }
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function all(): Collection
    {
        try {
            return $this->query()->get();
        } catch (BadModelClassImplementationException) {
            return collect();
        }
    }

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Contracts\ServiceableModelContract|null
     */
    public function create(array $attributes): Model|ServiceableModelContract|null
    {
        try {
            return $this->query()->create($attributes);
        } catch (BadModelClassImplementationException) {
            return null;
        }
    }

    /**
     * @param int|string $id
     * @param array      $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Contracts\ServiceableModelContract|null
     */
    public function update(int|string $id, array $attributes): Model|ServiceableModelContract|null
    {
        $model = $this->find($id);
        $model?->update($attributes);
        return $model;
    }

    /**
     * @param int|string $id
     *
     * @return \Illuminate\Database\Eloquent\Model|\Uiibevy\Core\Contracts\ServiceableModelContract|null
     */
    public function find(int|string $id): Model|ServiceableModelContract|null
    {
        try {
            return $this->query()->find($id);
        } catch (BadModelClassImplementationException) {
            return null;
        }
    }

    /**
     * @param int|string $id
     *
     * @return bool
     */
    public function delete(int|string $id): bool
    {
        $model = $this->find($id);
        $model?->delete();
        return true;
    }
}
