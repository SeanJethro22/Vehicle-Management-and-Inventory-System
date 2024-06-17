<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $storekeeper = Role::create(['name' => 'Storekeeper']);
        $driver = Role::create(['name' => 'Driver']);

        $admin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-consumption',
            'edit-consumption',
            'delete-consumption',
            'create-part',
            'edit-part',
            'delete-part',
            'create-patient',
            'edit-patient',
            'delete-patient',
            'create-driver',
            'edit-driver',
            'delete-driver',
            'create-responder',
            'edit-responder',
            'delete-responder',
            'create-supplier',
            'edit-supplier',
            'delete-supplier',
            'create-vehicle',
            'edit-vehicle',
            'delete-vehicle',
            'create-item',
            'edit-item',
            'delete-item',
            'create-passenger',
            'edit-passenger',
            'delete-passenger'
        ]);

        $storekeeper->givePermissionTo([
            'create-part',
            'edit-part',
            'delete-part',
            'create-item',
            'edit-item',
            'delete-item'
        ]);

        $driver->givePermissionTo([
            'create-consumption',
            'edit-consumption',
            'delete-consumption',
            'create-patient',
            'edit-patient',
            'delete-patient',
        ]);
    }
}
