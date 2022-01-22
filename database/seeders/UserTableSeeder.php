<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data user
        $userCreate = User::create([
            'name' => 'Agung Widyatmoko',
            'email' => 'agungwidyatmoko92@gmail.com',
            'password' => bcrypt('aldacr123')
        ]);

        // assign permission to tole
        $role = Role::find(1);
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        // assign role with permission to user
        $user = User::find(1);
        $user->assignRole($role->name);
    }
}
