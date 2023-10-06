<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_absent' => fake()->boolean(),
            'is_justified' => fake()->boolean(),
            'student_id' => Student::inRandomOrder()->first(),
            'lesson_id' => Lesson::inRandomOrder()->first(),
        ];
    }
}
