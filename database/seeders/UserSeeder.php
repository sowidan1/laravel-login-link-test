<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'employee',
            'email' => 'employee@localhost',
            'password' => bcrypt('password'),
            'role' => 'employee',
            'email_verified_at' => now()
        ]);
    }
}
