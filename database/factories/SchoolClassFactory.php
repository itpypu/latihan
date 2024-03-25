<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schoolclass_name' => $this->faker->unique()->word(), // Using Faker to generate a unique class name
            'schoolclass_grade' => $this->faker->unique()->numberBetween(1, 12), // Using Faker to generate a unique grade between 1 and 12
            // You can add other definitions as needed
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (SchoolClass $schoolClass) {
            $usedGrades = SchoolClass::pluck('schoolclass_grade')->toArray(); // Get all existing grades
            $schoolclass_grade = $this->faker->unique()->numberBetween(1, 12); // Generate a unique grade
            while (in_array($schoolclass_grade, $usedGrades)) { // Check if the generated grade is already used
                $grade = $this->faker->unique()->numberBetween(1, 12); // Generate a new unique grade if needed
            }
            $schoolClass->schoolclass_grade = $schoolclass_grade; // Assign the unique grade to the school class
        });
    }
}