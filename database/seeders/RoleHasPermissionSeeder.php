<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissiones = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissiones->pluck('id'));


        //Docente
        $user_permissions = $admin_permissiones->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'admin';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
        //Docente
        $user_permissions = $admin_permissiones->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'admin' &&
                substr($permission->name, 0, 7) != 'docente';
        });
        Role::findOrFail(3)->permissions()->sync($user_permissions);
    }
}
