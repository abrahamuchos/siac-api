<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breath>
 */
class BreathFactory extends Factory
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
            'breath_type' => random_int(121, 123),
            'focus_type' => random_int(125, 128),
            'intensity' => random_int(1, 4),
        ];
    }
}
