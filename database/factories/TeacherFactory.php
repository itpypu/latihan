<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_name' => $this->faker->name(),
            'subject_id' => $this->faker->randomElement(Subject::query()->get('subject_id'))
            // Anda bisa menambahkan definisi lain sesuai kebutuhan
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    // public function configure()
    // {
    //     return $this->afterCreating(function (Teacher $teacher) {
    //         $subjects = Subject::factory()->count(rand(1, 3))->create(); // Generate 1 to 3 subjects
    //         $teacher->subjects()->saveMany($subjects); // Associate subjects with the teacher
    //     });
    // }
}