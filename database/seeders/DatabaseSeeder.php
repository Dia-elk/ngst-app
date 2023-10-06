<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attendance;
use App\Models\Exam;
use App\Models\Grade;
use App\Models\HomeWork;
use App\Models\HomeWorkReport;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            EducationLevelSeeder::class,
            DegreeSeeder::class,
            SubjectSeeder::class,
            HomeworkStatusSeeder::class,
            SchoolSeeder::class,
            ClassRoomSeeder::class,
            StudentSeeder::class,
        ]);

        Teacher::factory(10)->create();
        Lesson::factory(20)->create();

        Attendance::factory(100)->create();

        HomeWorkReport::factory(20)->create();

        Exam::factory(5)->create();
        Grade::factory(50)->create();

        // \App\Models\User::factory(10)->create();


    }
}
