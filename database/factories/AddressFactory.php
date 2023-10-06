<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_1'          => fake()->sentence(),
            'address_2'          => fake()->randomElement([null, fake()->address()]),
            'lat'               => fake()->latitude(),
            'lng'               => fake()->longitude(),
            'zip'               => rand(1000, 999999),
            'city_id'           => $city = City::inRandomOrder()->first(),
            'country_id'        => $city->country,
        ];
    }
}
