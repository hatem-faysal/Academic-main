<?php

namespace App\Http\Requests\Auth\Admin;

use App\Rules\Auth\Admin\CheckAdmin;
use App\Rules\Auth\Admin\LoginAdmin;
use App\Rules\Auth\CheckUser;
use App\Rules\Auth\Login;
use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string','min:2','max:255'],
            'lastname' => ['required', 'string','min:2','max:255'],
            'email' => ['required', 'string', 'email','min:2','max:255','unique:users,email'],
            'password' => ['required', 'string'],
            'roles' => ['nullable'],
        ];
    }
}