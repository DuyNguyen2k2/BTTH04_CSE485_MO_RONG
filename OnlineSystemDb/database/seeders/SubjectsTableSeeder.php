<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'name' => 'Thuật toán ứng dụng',
        ]);
        Subject::create([
            'name' => 'Cấu trúc dữ liệu và giải thuật',
        ]);
    }
}
