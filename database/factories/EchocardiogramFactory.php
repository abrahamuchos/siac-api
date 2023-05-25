<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Echocardiogram>
 */
class EchocardiogramFactory extends Factory
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
            'description' => (random_int(0,1) ? fake()->text(100) : null),
            'img' => 'https://placehold.co/800x400?text=Ecocardiograma',
        ];
    }
}
