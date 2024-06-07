<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todo_categories')->insert([
            [
                'name' => 'Belajar',
            ],
            [
                'name' => 'Bekerja',
            ],
        ]);
    }
}
