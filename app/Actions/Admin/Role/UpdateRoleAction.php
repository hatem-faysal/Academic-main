<?php
namespace App\Actions\Admin\Role;

use Spatie\Permission\Models\Role;

class UpdateRoleAction
{
    public function handle($role,array $data): Role
    {
        $role->name = $data['name'];
        $role->save();
        $role->syncPermissions($data['permission']);
        return $role;
    }
}
