<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lifestyle>
 */
class LifestyleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $now = Carbon::now('America/Caracas');
        $now->year = random_int(2015,2020);
        $now->month = random_int(1, 12);
        $now->day = 01;
        $now->minute = 00;
        $now->second = 00;

        $drinkAlcohol = (bool) random_int(0,1);

        return [
            'physical_exercise' => true,
            'start_physical_activity' => $now,
            'drink_alcohol' => $drinkAlcohol,
            'qty_alcohol_type' => ($drinkAlcohol ? random_int(220, 224) : null)
        ];
    }
}
