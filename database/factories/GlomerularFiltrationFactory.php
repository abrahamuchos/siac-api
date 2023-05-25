<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GlomerularFiltration>
 */
class GlomerularFiltrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'age' => random_int(19,65),
            'afro_american' => random_int(0,1),
            'serum_creatinine' =>  fake()->randomFloat(2, 0.50, 1.60),
            'serum_creatinine_unit_type' => 226
        ];
    }
}
