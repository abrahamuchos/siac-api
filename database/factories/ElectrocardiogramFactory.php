<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Electrocardiogram>
 */
class ElectrocardiogramFactory extends Factory
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
            'rhythm_type' => random_int(217, 218),
            'rhythm_type_description' => fake()->text(100),
            'rhythm_frequency' => random_int(30, 300),
            'rhythm_frequency_unit_type' => 31,
            'rhythm_pr' => random_int(10, 50),
            'rhythm_pr_unit_type' => 34,
            'rhythm_qrs' => random_int(60, 200),
            'rhythm_qrs_unit_type' => 34,
            'axes_p' => random_int(0,360),
            'axes_p_unit_type' => 38,
            'axes_t'=> random_int(0,360),
            'axes_t_unit_type' => 38,
            'axes_qt'=> random_int(0,360),
            'axes_qt_unit_type' => 38,
            'description' => (random_int(0,1) ? fake()->text(500) : null),
            'img' => 'https://placehold.co/800x400?text=Electro',
        ];
    }
}
