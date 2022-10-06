<?php

namespace Database\Factories;

use App\Models\Brewer;
use App\Models\Coffee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brew>
 */
class BrewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brewer_id' => Brewer::factory(),
            'coffee_id' => Coffee::factory(),
            'grinder' => fake()->randomElement(['AVX 1065', '1zpresso J-Max']),
            'clicks' => fake()->randomFloat(1, 3, 150),
            'dose' => fake()->randomFloat(1, 8, 22),
            'yield' => fake()->randomFloat(1, 20, 500),
            'time' => fake()->time('0:i:s'),
            'description' => fake()->realText(),
            'notes' => fake()->numberBetween(0, 1) === 0 ? null : fake()->text,
        ];
    }
}
