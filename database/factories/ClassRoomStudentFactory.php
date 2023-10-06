<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassRoomStudent>
 */
class ClassRoomStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'n_list' => rand(1,50),
            'student_id' => Student::factory(),
            'class_room_id' => ClassRoom::inRandomOrder()->first(),
        ];
    }
}
