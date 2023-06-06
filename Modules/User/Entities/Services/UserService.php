<?php

namespace Modules\User\Entities\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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
