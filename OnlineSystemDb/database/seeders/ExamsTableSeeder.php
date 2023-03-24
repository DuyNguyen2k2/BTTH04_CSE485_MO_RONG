<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exam;
class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::create([
            'name' => 'Bài thi hết môn',
            'subject_id' => '1',
        ]);
        Exam::create([
            'name' => 'Bài thi giữa kì',
            'subject_id' => '2',
        ]);
    }
}
