<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teacher = Teacher::inRandomOrder()->first();

        return [
            'name' => $teacher->subject->name,
            'start_time' =>fake()->time,
            'end_time' => fake()->time,
            'class_room_id' => $classRoom = ClassRoom::inRandomOrder()->first(),
            'school_id' => $classRoom->school ,
            'teacher_id' => $teacher ,
            'subject_id' => $teacher->subject,
        ];
    }
}
