<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoresTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Score::factory(50)->create();
    }
}
