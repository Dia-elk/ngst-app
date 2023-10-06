<?php

namespace Database\Seeders;

use App\Models\ClassRoomStudent;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassRoomStudent::factory(100)->create();
    }
}
