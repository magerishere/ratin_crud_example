<?php

namespace Modules\User\Entities\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Entities\User;

class UserService
{
    private function getQuery(): Builder
    {
        return User::query();
    }

    public function getAll(): Collection
    {
        return $this->getQuery()->get();
    }
}
