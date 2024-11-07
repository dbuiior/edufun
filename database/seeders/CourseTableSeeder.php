<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            [
                'course_name' => 'Machine Learning',
                'category_id' => 1,
                'course_id' => 1,
            ],
            [
                'course_name' => 'Deep Learning',
                'category_id' => 1,
                'course_id' => 2,
            ],
            [
                'course_name' => 'Natural Language Processing', // Perbaiki typo 'Languange'
                'category_id' => 1,
                'course_id' => 3,
            ],
            [
                'course_name' => 'Software Security',
                'category_id' => 2,
                'course_id' => 4,
            ],
            [
                'course_name' => 'Network Administration',
                'course_id' => 5,
                'category_id' => 2,
            ],
            [
                'course_name' => 'Popular Network Technology',
                'course_id' => 6,
                'category_id' => 2,
            ]
        ]);
    }
}
