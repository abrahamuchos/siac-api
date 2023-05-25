<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArrhythmiaEsv>
 */
class ArrhythmiaEsvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'background_id' => null,
            'year' => random_int(2000, 2020),
            'pharmacotherapy' => (random_int(0,1) ? fake()->text(100) : null),
            'other_pharmacotherapy' => (random_int(0,1) ? fake()->text(500) : null)
        ];
    }
}
