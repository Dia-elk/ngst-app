<?php

namespace Database\Seeders;

use App\Models\HomeworkStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeworkStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeworkStatus::insert([
            ['name' => 'A Faire'],
            ['name' => 'Non Fait'],
            ['name' => 'Mal Fait'],
            ['name' => 'Fait'],
        ]);
    }
}
