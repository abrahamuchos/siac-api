<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhysicalExam>
 */
class PhysicalExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $oscillatingStop = (bool)random_int(0, 1);
        $peripheralPulsesSymmetrical = (bool)random_int(0, 1);
        $randomItb = (bool)random_int(0, 1);
        return [
            'general_aspect_type' => random_int(109, 111),
            'other_observation' => (random_int(0, 1) ? fake()->text(500) : null),
            'sinus_x' => (bool)random_int(0, 1),
            'cvy' => (bool)random_int(0, 1),
            'oscillating_stop' => ($oscillatingStop ? random_int(1, 10) : null),
            'oscillating_stop_unit_type' => ($oscillatingStop ? 21 : null),
            'pvy_other' => (random_int(0, 1) ? fake()->text(100) : null),
            'carotid_beats_symmetrical' => (bool)random_int(0, 1),
            'carotid_beats_homocrote' => (bool)random_int(0, 1),
            'carotid_beats_normal_width' => (bool)random_int(0, 1),
            'apex_is_palpable' => (bool)random_int(0, 1),
            'apex_displaced' => (bool)random_int(0, 1),
            'apex_characteristic_type' => (random_int(0, 1) ? random_int(113, 115) : null),
            'auscultation_regular' => (bool)random_int(0, 1),
            'auscultation_r1_type' => (random_int(0, 1) ? random_int(118, 119) : null),
            'auscultation_r2_type' => (random_int(0, 1) ? random_int(118, 119) : null),
            'auscultation_r3' => (bool)random_int(0, 1),
            'auscultation_r4' => (bool)random_int(0, 1),
            'auscultation_gallop_pace'=> (bool)random_int(0, 1),
            'peripheral_pulses_symmetrical' => $peripheralPulsesSymmetrical,
            'peripheral_pulses_mi' => ($peripheralPulsesSymmetrical ? random_int(1,6) : null),
            'peripheral_pulses_mid' => ($peripheralPulsesSymmetrical ?  null : random_int(1,6)),
            'peripheral_pulses_mii' => ($peripheralPulsesSymmetrical ?  null : random_int(1,6)),
            'edema_lower_limbs' => (random_int(0, 1) ? random_int(1, 4) : null) ,
            'itb_right_ankle_pressure' => ($randomItb ? random_int(60,220): null),
            'itb_right_arm_pressure' => ($randomItb ? random_int(60,220): null),
            'itb_left_ankle_pressure' => ($randomItb ? random_int(60,220): null),
            'itb_left_arm_pressure' => ($randomItb ? random_int(60,220): null),
            'score_itb' => ($randomItb ? fake()->randomFloat(2, 0, 1): null),
        ];
    }
}
