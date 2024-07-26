<?php
namespace App\Http\Requests\admin\Admins;


use Illuminate\Foundation\Http\FormRequest;

class StoreAdminsRequest extends FormRequest
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
        'firstname' => ['required','unique:users,firstname','max:255','min:2'],
        'lastname' => ['required','unique:users,lastname','max:255','min:2'],
        'email' => ['required','max:255','min:2','email','unique:users,email'],
        'password' => 'required|min:2|max:255',
        'status' => ['nullable'],
        'roles' => ['nullable'],
        ];
    }

}
