<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(20),
            'teacher_id' => Teacher::inRandomOrder()->first(),
            'subject_id' => Subject::inRandomOrder()->first(),
            'class_room_id' => ClassRoom::inRandomOrder()->first(),
        ];
    }
}
