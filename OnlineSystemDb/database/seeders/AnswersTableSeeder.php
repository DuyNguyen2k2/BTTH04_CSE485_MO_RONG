<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;
class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'answer_text' => 'A B C D',
            'is_correct' => 'A',
            'question_id' => 1,
        ]);
        Answer::create([
            'answer_text' => 'A B C D',
            'is_correct' => 'D',
            'question_id' => 2,
        ]);
    }
}
