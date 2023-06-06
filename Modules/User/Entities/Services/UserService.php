<?php

namespace Modules\User\Entities\Services;

use App\Enums\OrderBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Modules\User\Entities\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
     * @param OrderBy|null $orderBy
     * @return Collection
     */
    public function getAll(?OrderBy $orderBy = null): Collection
    {
        $orderBy = $orderBy ?? OrderBy::DESC();

        $query = $this->getQuery();

        if ($orderBy->value === OrderBy::DESC) {
            $query->orderByDesc('created_at');
        }
        return $query->get();
    }

    /**
     * @param OrderBy|null $orderBy
     * @return Collection
     */
    public function getAllTrashed(?OrderBy $orderBy = null): Collection
    {
        $orderBy = $orderBy ?? OrderBy::DESC();

        $query = $this->getQuery()->onlyTrashed();

        if ($orderBy->value === OrderBy::DESC) {
            $query->orderByDesc('created_at');
        }

        return $query->get();
    }

    /**
     * Get User By Id
     * @param int $id
     * @param bool $complain
     * @param bool $inTrashed
     * @return User
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

    /**
     * Create User
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        return DB::transaction(function () use ($data) {
            return $this->getQuery()->create($data);
        }, 3);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function update(User $user, array $data): User
    {
        return DB::transaction(function () use ($user, $data) {
            $user->update($data);
            $user->refresh();
            return $user;
        });
    }

    /**
     * @param User $user
     * @param bool $force
     * @return void
     */
    public function delete(User $user, bool $force = false): void
    {
        DB::transaction(function () use ($user, $force) {
            if ($force) {
                $user->forceDelete();
            } else {
                $user->delete();
            }
        });
    }

    /**
     * @param User $user
     * @return User
     */
    public function restore(User $user): User
    {
        return DB::transaction(function () use ($user) {
            $user->restore();
            $user->refresh();
            return $user;
        });

    }

    /**
     * @param User $user
     * @param UploadedFile $uploadedFile
     * @return \Spatie\MediaLibrary\MediaCollections\Models\Media
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function addMedia(User $user, UploadedFile $uploadedFile): Media
    {
        return $user->addMedia($uploadedFile)->toMediaCollection('default', 'users');
    }

    /**
     * @param User $user
     * @param string|null $collectionName
     * @return void
     */
    public function clearMedia(User $user, ?string $collectionName = null): void
    {
        if ($collectionName) {
            $user->clearMediaCollection($collectionName);
        } else {
            $user->clearMediaCollection();
        }
    }


}
