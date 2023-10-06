<?php

namespace Database\Seeders;

use App\Enum\EducationLevelsEnum;
use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Degree::insert([
            ['name' => 'CE-1' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => 'CE-2' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => 'CE-3' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => 'CE-4' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => 'CE-5' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => 'CE-6' , 'education_level_id' => EducationLevelsEnum::PRIMAIRE],
            ['name' => '1-APIC' , 'education_level_id' => EducationLevelsEnum::COLLEGE],
            ['name' => '2-APIC' , 'education_level_id' => EducationLevelsEnum::COLLEGE],
            ['name' => '3-APIC' , 'education_level_id' => EducationLevelsEnum::COLLEGE],
            ['name' => 'tronc-commun' , 'education_level_id' => EducationLevelsEnum::LYCEE],
            ['name' => '1-bac' , 'education_level_id' => EducationLevelsEnum::LYCEE],
            ['name' => '2-bac' , 'education_level_id' => EducationLevelsEnum::LYCEE],
        ]);
    }
}
