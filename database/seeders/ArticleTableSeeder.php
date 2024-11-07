<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article')->insert([
            [
                'title' => 'Introduction to Machine Learning',
                'release_date' => '2024-11-01',
                'description' => 'An introductory article about the basics of Machine Learning.',
                'image' => 'https://example.com/image1.jpg',
                'writer_id' => 1, 
                'course_id' => 1,
                'article_id' => 1, // ID kursus untuk Machine Learning
            ],
            [
                'title' => 'Deep Learning Techniques',
                'release_date' => '2024-11-02',
                'description' => 'An overview of deep learning techniques and their applications.',
                'image' => 'https://example.com/image2.jpg',
                'writer_id' => 1, // ID penulis
                'course_id' => 2, // ID kursus untuk Machine Learning
                'article_id' => 2, 
            ],
            [
                'title' => 'Natural Language Processing Basics',
                'release_date' => '2024-11-03',
                'description' => 'Exploring the fundamentals of Natural Language Processing.',
                'image' => 'https://example.com/image3.jpg',
                'writer_id' => 2, // ID penulis
                'course_id' => 3, // ID kursus untuk Deep Learning
                'article_id' => 3, 
            ],
            [
                'title' => 'Network Security Principles',
                'release_date' => '2024-11-04',
                'description' => 'Understanding the basic principles of network security.',
                'image' => 'https://example.com/image4.jpg',
                'writer_id' => 3, // ID penulis
                'course_id' => 4, // ID kursus untuk Network Security
                'article_id' => 4, 
            ],
            [
                'title' => 'Advanced Network Technologies',
                'release_date' => '2024-11-05',
                'description' => 'A deep dive into advanced network technologies.',
                'image' => 'https://example.com/image5.jpg',
                'writer_id' => 3, // ID penulis
                'course_id' => 5, // ID kursus untuk Network Security
                'article_id' => 5, 
            ]
        ]);
    }
}
