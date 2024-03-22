<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DifficultySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('difficulties')->insert([
            'name' => Str::random(255)
        ]);
    }
}
