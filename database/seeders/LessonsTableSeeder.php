<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'lesson_date' => '2023-09-25',
                'lesson_time' => '08:15:00',
                'topic' => 'DON3',
            ],
            [
                'lesson_date' => '2023-09-26',
                'lesson_time' => '09:30:00',
                'topic' => 'PERJG4',
            ],
            [
                'lesson_date' => '2023-09-27',
                'lesson_time' => '10:45:00',
                'topic' => 'SYSG4',
            ],
            [
                'lesson_date' => '2023-09-28',
                'lesson_time' => '13:30:00',
                'topic' => 'DEV3',
            ],
            [
                'lesson_date' => '2023-09-29',
                'lesson_time' => '15:45:00',
                'topic' => 'ATLG4',
            ],
            [
                'lesson_date' => '2023-09-30',
                'lesson_time' => '17:00:00',
                'topic' => 'SECG4',
            ],
        ];

        // Insert the records into the "lessons" table
        foreach ($lessons as $lesson) {
            DB::table('lessons')->insert($lesson);
        }
    }
}
