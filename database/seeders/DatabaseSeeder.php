<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'dummy',
            'email' => 'admin@test.com',
            'password' => Hash::make('qwqwqwqw'),
            'nip' => '123456789012345001',
        ]);
    }
}
