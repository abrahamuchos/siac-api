<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DyslipidemiaReduceResidualRisk>
 */
class DyslipidemiaReduceResidualRiskFactory extends Factory
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
            'patient_risk_type' => random_int(184, 187),
            'tg_hdlc' => random_int(0,1),
            'result_type' => random_int(189, 191),
        ];
    }
}
