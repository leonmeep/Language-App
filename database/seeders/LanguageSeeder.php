<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('languages')->insert([
            'name' => Str::random(100),
            'description' => Str::random(500),
            'spoken_by' => rand(1, 700),
        ]);
    }
}
