<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Score;
class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Score::create([
            'user_id' => '2',
            'exam_id' => '1',
            'num_correct' => '8',
            'total_score' => '8'
        ]);
    }
}
