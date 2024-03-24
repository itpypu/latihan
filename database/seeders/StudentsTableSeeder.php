<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Student::factory(10)->create();
    }
} 
