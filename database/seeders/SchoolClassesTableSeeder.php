<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolClass;

class SchoolClassesTableSeeder extends Seeder
{
    public function run()
    {
        SchoolClass::factory(5)->create();
    }
}
