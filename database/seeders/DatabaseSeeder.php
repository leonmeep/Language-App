<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DifficultySeeder::class,
        ]);
        $this->call([
            LanguageSeeder::class,
        ]);
    }
}
