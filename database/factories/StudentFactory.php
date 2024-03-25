<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y-m-d'),
            'schoolclass_id' => $this->faker->randomElement(SchoolClass::query()->get('schoolclass_id')),
            'address' => $this->faker->text(50)
            // Define other attributes of the Student model
        ];
    }

    /**
     * Configure the model factory to provide a relationship between Student and SchoolClass.
     *
     * @return $this
     */
}