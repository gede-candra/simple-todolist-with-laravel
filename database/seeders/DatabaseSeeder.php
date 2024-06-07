<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'     => 'Admin Todolist',
            'email'    => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'role'     => 'Admin',
        ]);

        $this->call([
            TodoCategorySeeder::class,
            TodolistSeeder::class,
        ]);
    }
}
