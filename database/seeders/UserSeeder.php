<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
