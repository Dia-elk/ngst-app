<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
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
            SchoolSeeder::class,
            ClassRoomSeeder::class,
        ]);

        Student::factory(100)->create();

        // \App\Models\User::factory(10)->create();


    }
}
