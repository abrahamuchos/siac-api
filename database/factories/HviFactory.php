<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hvi>
 */
class HviFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $cornell = random_int(0,1);

        return [
            'age' => random_int(19,65),
            'wave_r_cornell' => ($cornell ? random_int(0,50) : null),
            'wave_s_cornell'=> ($cornell ? random_int(0,50) : null),
            'score_cornell'=> ($cornell ? random_int(0,30) : null),
            'wave_s_vi_sokolow' => (!$cornell ? random_int(0,50) : null),
            'wave_r_sokolow' => (!$cornell ? random_int(0,50) : null),
            'score_sokolow' => (!$cornell ? random_int(0,50) : null),
        ];
    }
}
