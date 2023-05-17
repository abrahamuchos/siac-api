<?php

namespace Database\Factories;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FamilyBackground>
 */
class FamilyBackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $kinshipType = Attribute::find(95)->childAttributes()->get();

        return [
            'background_id' => null,
            'kinship_type' => $kinshipType->random(),
            'age' => random_int(45, 89),
            'other_disease' => (random_int(0,1) ? fake()->paragraph(5) : null)
        ];
    }

}
