<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'siswa']);

        // Buat permission
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage classes']);
        Permission::create(['name' => 'manage attendance']);

        // Assign permission
        Role::findByName('admin')->givePermissionTo(Permission::all());
        Role::findByName('guru')->givePermissionTo('manage attendance');
    }
}
