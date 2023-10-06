<?php

namespace Database\Factories;

use App\Models\HomeWork;
use App\Models\HomeworkStatus;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeWorkReport>
 */
class HomeWorkReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'home_work_id' => HomeWork::factory(),
            'status_id' => HomeworkStatus::inRandomOrder()->first(),
            'student_id' => Student::inRandomOrder()->first(),
        ];
    }
}
