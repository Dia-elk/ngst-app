<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeWork>
 */
class HomeWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date,
            'name' => fake()->text(10),
            'class_room_id' => ClassRoom::inRandomOrder()->first(),
            'teacher_id' =>Teacher::inRandomOrder()->first(),
        ];
    }
}
