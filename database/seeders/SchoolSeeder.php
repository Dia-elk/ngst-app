<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::factory()->create([
            'name' => 'Les Printemps',
            'address_id' => Address::factory(),
        ]);
    }
}
