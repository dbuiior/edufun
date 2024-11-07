<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            [
                'category_id' => 1,
                'category_name' => 'Data Science',
            ],
            [
                'category_id' => 2,
                'category_name' => 'Network Security',
            ]
        ]);
    }
}
