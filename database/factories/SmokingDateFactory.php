<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmokingDate>
 */
class SmokingDateFactory extends Factory
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
            'abandon_date' => random_int(2010, 2021).'-'. random_int(1,12) .'-01 00:00:00',
            'reset_date' => '2022-12-01 00:00:00',
        ];
    }
}
