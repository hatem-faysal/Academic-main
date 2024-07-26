<?php
namespace App\Actions\Admin\Users\Students;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StoreStudentAction
{
    public function handle(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        $admin = User::create($data+['slug'=>Str::slug($data['firstname'].$data['lastname'])]);
        isset($data['roles'])?$admin->assignRole($data['roles']):'';
        return $admin;
    }
}



