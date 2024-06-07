<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todolists')->insert([
            [
                'task'             => 'Belajar laravel',
                'todo_category_id' => 1,
                'user_id'          => 1,
                'deadline'         => now()->addDays(1),
            ],
        ]);
    }
}
