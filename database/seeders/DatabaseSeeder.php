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
            'name' => 'Jutta Musterfrau',
            'email' => 'jutta@amica.li',
            'password' => Hash::make('password')
        ]);


        User::create([
            'name' => 'Max Mustermann',
            'email' => 'max@amica.li',
            'password' => Hash::make('password')
        ]);

        $this->call([ArticlesSeeder::class]);
    }
}
