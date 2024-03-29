<?php

namespace Modules\User\Http\Controllers\Back;

use App\Http\Controllers\BackController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\User\Entities\Services\UserService;
use Modules\User\Http\Requests\Back\UserStoreRequest;
use Modules\User\Http\Requests\Back\UserUpdateRequest;

class UserController extends BackController
{
    public function __construct(private UserService $userService)
    {

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        try {
            $users = $this->userService->getAll();
            return view('user::back.index', compact('users'));
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::back.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserStoreRequest $request)
    {
        try {
            $user = $this->userService->create($request->all());
            if ($image = $request->file('image')) {
                $this->userService->addMedia($user, $image);
            }
            $this->successFlashMessage(__('user::session_message.back.create'));
            return to_route('admin.users.edit', $user->id);
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        try {
            $user = $this->userService->getById($id);
            return view('user::back.edit', compact('user'));
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $user = $this->userService->getById($id);
            $user = $this->userService->update($user, $request->all());
            if ($image = $request->file('image')) {
                $this->userService->clearMedia($user);
                $this->userService->addMedia($user, $image);
            }
            $this->successFlashMessage(__('user::session_message.back.update'));
            return back();
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try {
            $user = $this->userService->getById($id);
            $this->userService->delete($user);
            $this->successFlashMessage(__('user::session_message.back.delete'));
            return back();
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }
    }

    public function trashed()
    {
        try {
            $users = $this->userService->getAllTrashed();
            return view('user::back.trashed', compact('users'));
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }

    }

    public function trashedRestore($id)
    {
        try {
            $user = $this->userService->getById($id, true, true);
            $this->userService->restore($user);
            $this->successFlashMessage(__('user::session_message.back.restore'));
            return back();
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }
    }

    public function trashedDestroy($id)
    {
        try {
            $user = $this->userService->getById($id, true, true);
            $this->userService->delete($user, true);
            $this->successFlashMessage(__('user::session_message.back.force_delete'));
            return back();
        } catch (\Exception $exception) {
            $this->errorFlashMessage($exception->getMessage());
            return back();
        }
    }
}
