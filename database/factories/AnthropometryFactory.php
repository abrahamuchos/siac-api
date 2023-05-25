<?php

namespace Database\Factories;

use App\Models\Anthropometry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Anthropometry>
 */
class AnthropometryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weight' => fake()->randomFloat(2, 40, 120),
            'weight_unit_type' => 4 ,
            'size' => fake()->randomFloat(2,100,210),
            'size_unit_type' => 21,
            'abdominal_waist' => fake()->randomFloat(2,100,190),
            'abdominal_waist_unit_type' => 21,
            'bmi_score'=> fake()->randomFloat(1, 17, 42),
            'bmi_score_unit_type' => 41,
            'bsa_score' => fake()->randomFloat(1, 17, 42),
            'bsa_score_unit_type' => 41,
        ];
    }
}
