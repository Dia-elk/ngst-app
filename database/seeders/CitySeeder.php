<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       City::insert([
               ['name' => 'Marrakech' , 'country_id' => 1],
               ['name' => 'Casablanca' , 'country_id' => 1],
               ['name' => 'Agadir' , 'country_id' => 1],
               ['name' => 'Tanja' , 'country_id' => 1],
               ['name' => 'Rabat' , 'country_id' => 1],
           ]);

    }
}
