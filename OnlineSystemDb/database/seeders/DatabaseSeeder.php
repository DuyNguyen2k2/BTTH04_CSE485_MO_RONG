<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            $this->call(AnswersTableSeeder::class);
            $this->call(ExamsTableSeeder::class);
            $this->call(QuestionsTableSeeder::class);
            $this->call(ScoreTableSeeder::class);
            $this->call(SubjectsTableSeeder::class);
            $this->call(UserAnswersTableSeeder::class);
            $this->call(UserExamsTableSeeder::class);
            $this->call(UsersTableSeeder::class);
    }
}
