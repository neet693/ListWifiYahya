<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListWifi>
 */
class ListWifiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unit' => fake()->company(),
            'lokasi' => fake()->address(),
            'ssid' => fake()->paragraph(),
            'password' => fake()->password(),
            'ipaddress' => fake()->address(),
        ];
    }
}
