<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
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
            'delete-vehicle'
         ];
        
        
        // Looping and Inserting Array's Permissions into Permission Table
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}
