<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FindRisk>
 */
class FindRiskFactory extends Factory
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
            'age' => random_int(19,65),
            'bmi' => fake()->randomFloat(2, 10, 40),
            'hta' => random_int(0,1),
            'high_blood_glucose' => random_int(0,1) ,
            'physical_activity_type' => random_int(168,169),
            'consumption_vegetable' => random_int(0,1),
            'family_diabetic_type' => random_int(171, 173),
            'score' => random_int(0, 22),
            'risk_percentage' => fake()->randomFloat(2, 0.10, 20),
        ];
    }
}
