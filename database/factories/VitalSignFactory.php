<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VitalSign>
 */
class VitalSignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $sitting = (bool)random_int(0, 1);
        $lying = (bool)random_int(0, 1);
        $standing = (bool)random_int(0, 1);

        return [
            'temp' => fake()->randomFloat(1, 35, 45),
            'temp_unit_type' => 27,
            'sat' => (random_int(0, 1) ? fake()->randomFloat(1, 75, 100) : null),
            'sitting_breathing_frequency' => ($sitting ? random_int(10, 25) : null),
            'sitting_breathing_frequency_unit_type' => ($sitting ? 39 : null),
            'sitting_heart_rate' => ($sitting ? random_int(10, 140) : null),
            'sitting_heart_rate_unit_type' => ($sitting ? 31 : null),
            'sitting_pas_right_arm' => ($sitting ? random_int(60, 220) : null),
            'sitting_pas_right_arm_unit_type' => ($sitting ? 40 : null),
            'sitting_pad_right_arm' => ($sitting ? random_int(60, 220) : null),
            'sitting_pad_right_arm_unit_type' => ($sitting ? 40 : null),
            'sitting_pas_left_arm' => ($sitting ? random_int(60, 220) : null),
            'sitting_pas_left_arm_unit_type' => ($sitting ? 40 : null),
            'sitting_pad_left_arm' => ($sitting ? random_int(60, 220) : null),
            'sitting_pad_left_arm_unit_type' => ($sitting ? 40 : null),
            'lying_down_breathing_frequency' => ($lying ? random_int(10, 25) : null),
            'lying_down_breathing_frequency_unit_type' => ($lying ? 39 : null),
            'lying_down_heart_rate' => ($lying ? random_int(10, 140) : null),
            'lying_down_heart_rate_unit_type' => ($lying ? 31 : null),
            'lying_down_pas_right_arm' =>  ($lying ? random_int(60, 220) : null),
            'lying_down_pas_right_arm_unit_type' => ($lying ? 40 : null),
            'lying_down_pad_right_arm' => ($lying ? random_int(60, 220) : null),
            'lying_down_pad_right_arm_unit_type' => ($lying ? 40 : null),
            'lying_down_pas_left_arm' => ($lying ? random_int(60, 220) : null),
            'lying_down_pas_left_arm_unit_type' => ($lying ? 40 : null),
            'lying_down_pad_left_arm' => ($lying ? random_int(60, 220) : null),
            'lying_down_pad_left_arm_unit_type' => ($lying ? 40 : null),
            'standing_breathing_frequency' => ($standing ? random_int(10, 25) : null),
            'standing_breathing_frequency_unit_type' => ($standing ? 39 : null),
            'standing_heart_rate' =>  ($standing ? random_int(10, 140) : null),
            'standing_heart_rate_unit_type' => ($standing ? 31 : null),
            'standing_pas_right_arm' => ($standing ? random_int(60, 220) : null),
            'standing_pas_right_arm_unit_type' => ($standing ? 40 : null),
            'standing_pad_right_arm' =>  ($standing ? random_int(60, 220) : null),
            'standing_pad_right_arm_unit_type' => ($standing ? 40 : null),
            'standing_pas_left_arm' => ($standing ? random_int(60, 220) : null),
            'standing_pas_left_arm_unit_type' => ($standing ? 40 : null),
            'standing_pad_left_arm' => ($standing ? random_int(60, 220) : null),
            'standing_pad_left_arm_unit_type' => ($standing ? 40 : null),
            'avg_pad' => ($sitting || $lying || $standing ? random_int(60, 300) : null),
            'avg_pas' => ($sitting || $lying || $standing ? random_int(60, 300) : null),
        ];
    }
}
