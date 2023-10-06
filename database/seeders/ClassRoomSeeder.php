<?php

namespace Database\Seeders;

use App\Enum\DegreesEnum;
use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassRoom::insert([
            ['name' => 'c-1' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC1],
            ['name' => 'c-2' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC1],
            ['name' => 'c-3' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC1],
            ['name' => 'c-4' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC1],
            ['name' => 'c-1' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC2],
            ['name' => 'c-2' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC2],
            ['name' => 'c-3' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC2],
            ['name' => 'c-4' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC2],
            ['name' => 'c-1' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC3],
            ['name' => 'c-2' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC3],
            ['name' => 'c-3' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC3],
            ['name' => 'c-4' , 'school_id' => 1 , 'degree_id' => DegreesEnum::APIC3],
        ]);
    }
}
