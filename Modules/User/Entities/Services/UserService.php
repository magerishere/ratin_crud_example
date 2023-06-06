<?php

namespace Modules\User\Entities\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Entities\User;

class UserService
{
    /**
     * Get User Query
     * @return Builder
     */
    private function getQuery(): Builder
    {
        return User::query();
    }

    /**
     * Get All User
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->getQuery()->get();
    }

    /**
     * Create User
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        return $this->getQuery()->create($data);
    }

    /**
     * Get User By Id
     * @return void
     */
    public function getById(int $id, bool $complain = true, bool $inTrashed = false): User
    {
        $query = $this->getQuery();

        if ($inTrashed) {
            $query->onlyTrashed();
        }

        $query->whereId($id);

        return $complain
            ? $query->firstOrFail()
            : $query->first();
    }
}
