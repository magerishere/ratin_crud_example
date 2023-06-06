<?php

namespace Modules\User\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\Entities\User;

class UserStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
