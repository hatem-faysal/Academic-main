<?php
namespace App\Actions\Admin\Role;

use Spatie\Permission\Models\Role;


class StoreRoleAction
{
    public function handle(array $data): Role
    {
        $role = Role::create(['name' => $data['name']]);
        $role->syncPermissions($data['permission']);
        return $role;
    }
}
