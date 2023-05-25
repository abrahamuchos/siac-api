<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AtherogenicDyslipidemia>
 */
class AtherogenicDyslipidemiaFactory extends Factory
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
            'cvr_type' => random_int(176, 178),
            'c_n_hdl' => random_int(0, 300),
            'apo_b' => random_int(0, 300),
            'result_type' => random_int(180, 181),
        ];
    }
}
