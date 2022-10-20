<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coffee>
 */
class CoffeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->streetName,
            'roaster' => fake()->colorName.' '.fake()->firstNameFemale().' Roastery',
            'country' => fake()->country(),
            'species' => fake()->randomElement(['robusta', 'arabica']),
            'roast_level' => fake()->randomElement(['light-presso', 'light-filter', 'medium', 'dark']),
            'roast_date' => fake()->date(),
            'altitude' => fake()->randomDigitNotNull(),
            'tasting_notes' => json_encode(fake()->randomElements(fake()->words(), 2)),
        ];
    }
}
