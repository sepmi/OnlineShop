<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class PasswordUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'currentPassword'=>['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed','required_with:password_confirmation'],
            'password_confirmation' =>['required'],
        ];
    }
}
