<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            'name' => 'admin'
        ]);

        $role_anggota = Role::create([
            'name' => 'anggota'
        ]);
        $role_pustawan = Role::create([
            'name' => 'pustakawan'
        ]);

        $permission = Permission::create([
            'name' => 'create'
        ]);
        $permission = Permission::create([
            'name' => 'update'
        ]);
        $permission = Permission::create([
            'name' => 'read'
        ]);
        $permission = Permission::create([
            'name' => 'delete'
        ]);

        $anggota = User::create([
            'username' => 'anggota 1',
            'name' => 'Anggota 1',
            'email' => 'anggota@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $anggota->assignRole('anggota');


        $admin = User::create([
            'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->assignRole('admin');

        $pustakawan = User::create([
            'username' => 'Pustakawan',
            'name' => 'Pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $anggota->assignRole('pustakawan');

        // $role_admin->givePermissionTo('read');
        // $role_admin->givePermissionTo('update');
        // $role_admin->givePermissionTo('delete');
        // $role_admin->givePermissionTo('create');
        // $role_anggota->givePermissionTo('read');
    }
}