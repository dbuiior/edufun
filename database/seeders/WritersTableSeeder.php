<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('writer')->insert([
            ['writer_id' => 1,'writer_name' => 'Raka Putra Wicaksono', 'writer_role' => 'Data Science Specialist'],
            ['writer_id' => 2,'writer_name' => 'Bia Mecca Anisa', 'writer_role' => 'Network Security Specialist'],
            ['writer_id' => 3,'writer_name' => 'Blara Deng', 'writer_role' => 'Network Security Specialist'],
            ['writer_id' => 4,'writer_name' => 'Chris How', 'writer_role' => 'Data Science Specialist'],
        ]);
    }
}
