<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_answer;
class UserAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User_answer::create([
            'user_id' => '2',
            'question_id' => '1',
            'answer_id' => '1'
        ]);
    }
}
