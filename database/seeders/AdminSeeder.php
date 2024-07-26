<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $admin=User::create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'slug'=>Str::slug('Admin'),
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'), // password
            'remember_token' => null,
            'status' => 'Active',
            'created_at'=>now() ,
        ]);
        $role = Role::create(['name' => 'Admin']);
         Role::create(['name' => 'Teacher']);
         Role::create(['name' => 'Student']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $admin->assignRole([$role->id]);
    }
}
