<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $user = Role::firstOrCreate(['name' => 'User']);

        $permissions = [
            'create-hobby', 'read-hobby', 'update-hobby', 'delete-hobby',
            'create-siswa', 'read-siswa', 'update-siswa', 'delete-siswa',
            'create-user', 'read-user', 'update-user', 'delete-user',
            'create-role', 'read-role', 'update-role', 'delete-role',
            
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $superAdmin->syncPermissions(Permission::all());

        $admin->syncPermissions([
            'create-hobby',
            'read-hobby',
            'update-hobby',
            'delete-hobby',
        ]);

        $user->syncPermissions([
            'read-hobby',
            'read-siswa',
        ]);
        
    }
}
