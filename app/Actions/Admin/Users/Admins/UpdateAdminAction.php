<?php
namespace App\Actions\Admin\Users\Admins;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateAdminAction
{
    public function handle(User $admin,array $data): User
    {
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
            $admin->update($data);
        }else{
            $admin->update(Arr::except($data, 'password'));
        }
        DB::table('model_has_roles')->where('model_id',$admin->id)->delete();
        isset($data['roles'])?$admin->assignRole($data['roles']):'';
        return $admin;
    }
}
