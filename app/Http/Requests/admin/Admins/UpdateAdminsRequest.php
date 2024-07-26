<?php
namespace App\Http\Requests\admin\Admins;


use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminsRequest extends FormRequest
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
        $id= Request()->segment(3);
        return [
        'firstname' => ['required','unique:users,firstname,'.$id,'max:255','min:2'],
        'lastname' => ['required','unique:users,lastname,'.$id,'max:255','min:2'],
        'email' => 'required|email|unique:users,email,'.$id,
        'status' => ['nullable'],
        'password' => ['nullable'],
        'roles' => ['nullable'],
        ];
    }
}
