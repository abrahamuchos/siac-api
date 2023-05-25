<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InterheartRisk>
 */
class InterheartRiskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $useTobacco = random_int(0, 1);
        $currentSmoker = ($useTobacco ? random_int(148, 149) : false);

        return [
            'age' => random_int(19, 65),
            'use_tobacco_type' => ($useTobacco ? $currentSmoker : 225),
            'cant_tobacco_type' => ($currentSmoker == 149 ? random_int(150, 154) : null),
            'passive_smoker_type' => random_int(156, 158),
            'diabetic' => random_int(0, 1),
            'hta' => random_int(0, 1),
            'family_history' => random_int(0, 1),
            'waist_hip_ratio_type' => random_int(160, 162),
            'psychosocial_factor_type' => random_int(164, 165),
            'score' => rand(0, 15),
        ];
    }
}
