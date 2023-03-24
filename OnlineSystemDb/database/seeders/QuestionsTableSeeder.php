<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'question_text' => 'abc',
            'exam_id' => '1',
        ]);
        Question::create([
            'question_text' => 'def',
            'exam_id' => '2',
        ]);
    }
}
