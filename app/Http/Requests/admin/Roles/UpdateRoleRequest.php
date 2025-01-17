<?php

namespace App\Http\Requests\admin\Roles;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
       $id= Request()->segment(3);
        return [
        'name' => 'required|unique:roles,name,'.$id,
        'permission' => 'required',
        ];
    }
}
