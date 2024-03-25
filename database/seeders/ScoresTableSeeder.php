<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoresTableSeeder extends Seeder
{
    public function run()
    {
        Score::factory(10)->create();
    }
}
