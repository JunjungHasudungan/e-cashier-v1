<?php

namespace Database\Seeders;

// melakukan registrasi alamat model user
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

         User::create([
            'name' => 'cashier',
            'email' => 'cashier@cashier.com',
            'password' => bcrypt('password'),
            'role' => 'cashier'
        ]);
    }
}
