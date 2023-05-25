<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PulseMeanArterialPressure>
 */
class PulseMeanArterialPressureFactory extends Factory
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
            'systolic_blood_pressure' => random_int(100,300),
            'diastolic_blood_pressure' => random_int(100,300),
            'unit_type' => 40,
            'pulse_pressure' => fake()->randomFloat(1, 100, 250),
            'mean_arterial_pressure' => fake()->randomFloat(1, 100, 250),
        ];
    }
}
