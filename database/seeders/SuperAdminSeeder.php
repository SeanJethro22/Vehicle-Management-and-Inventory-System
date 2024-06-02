<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Jerick Jay Verbal', 
            'email' => 'jiaamethyst101@gmail.com',
            'password' => Hash::make('jerick')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Michael Natividad', 
            'email' => 'michaelnatividad@gmail.com',
            'password' => Hash::make('michael')
            
        ]);
        $admin->assignRole('Admin');

        // Creating Storekeeper1  User
        $storekeeper1 = User::create([
            'name' => 'William Bernardo Jr.', 
            'email' => 'williambernardo@gmail.com',
            'password' => Hash::make('william')
        ]);
        $storekeeper1->assignRole('Storekeeper');

        // Creating Storekeeper2 User
        $storekeeper2 = User::create([
            'name' => 'Nielcel Beltran', 
            'email' => 'nielcelbeltran@gmail.com',
            'password' => Hash::make('nielcel')
        ]);
        $storekeeper2->assignRole('Storekeeper');

        // Creating Driver1  User
        $driver1 = User::create([
            'name' => 'Bernie Lopez', 
            'email' => 'bernielopez@gmail.com',
            'password' => Hash::make('bernie')
        ]);
        $driver1->assignRole('Driver');

        // Creating Driver2  User
        $driver2 = User::create([
            'name' => 'Renato Felizardo Jr.', 
            'email' => 'renatofelizardojr@gmail.com',
            'password' => Hash::make('renato')
        ]);
        $driver2->assignRole('Driver');

        // Creating Driver3  User
        $driver3 = User::create([
            'name' => 'Ricky Baldove', 
            'email' => 'rickybaldove@gmail.com',
            'password' => Hash::make('ricky')
        ]);
        $driver3->assignRole('Driver');

        // Creating Driver4  User
        $driver4 = User::create([
            'name' => 'Erwin Earl Maitim', 
            'email' => 'erwinearlmaitim@gmail.com',
            'password' => Hash::make('erwinearl')
        ]);
        $driver4->assignRole('Driver');

        // Creating Driver5  User
        $driver5 = User::create([
            'name' => 'Khin Oliver Gonzales', 
            'email' => 'khinolivergonzales@gmail.com',
            'password' => Hash::make('khinoliver')
        ]);
        $driver5->assignRole('Driver');

        // Creating Driver6  User
        $driver6 = User::create([
            'name' => 'Kitz Adelmita', 
            'email' => 'kitzadelmita@gmail.com',
            'password' => Hash::make('kitz')
        ]);
        $driver6->assignRole('Driver');

        // Creating Driver7  User
        $driver7 = User::create([
            'name' => 'Angelo Adelmita', 
            'email' => 'angeloadelmita@gmail.com',
            'password' => Hash::make('angelo')
        ]);
        $driver7->assignRole('Driver');

        // Creating Driver8  User
        $driver8 = User::create([
            'name' => 'Fritz Dayaday', 
            'email' => 'fritzdayaday@gmail.com',
            'password' => Hash::make('fritz')
        ]);
        $driver8->assignRole('Driver');

        // Creating Driver9  User
        $driver9 = User::create([
            'name' => 'Ian Anton Rosete', 
            'email' => 'ianantonrosete@gmail.com',
            'password' => Hash::make('iananton')
        ]);
        $driver9->assignRole('Driver');
    }
}
