<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nguyễn A',
            'email' => 'adc@gmail.com',
            'password' => Hash::make('abc'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Nguyễn Văn B',
            'email' => 'def@gmail.com',
            'password' => Hash::make('def'),
        ]);
    }
}
