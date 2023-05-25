<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'title' => fake()->text(100),
            'sub_title' => (random_int(0,1) ? fake()->text(30) : null),
            'img' => 'https://placehold.co/800x400?text=Post',
            'content' => fake()->text(700),
        ];
    }
}
