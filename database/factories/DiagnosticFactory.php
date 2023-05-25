<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnostic>
 */
class DiagnosticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $hta = (bool)random_int(0, 1);
        $dyslipidemia = (bool)random_int(0, 1);
        $overweight = (bool)random_int(0, 1);
        $obesity = (bool)random_int(0, 1);
        $prediabetic = (bool)random_int(0, 1);
        $diabetic = (bool)random_int(0, 1);
        $ischemicHeart = (bool)random_int(0, 1);
        $arrhythmia = (bool)random_int(0, 1);
        $heartFailure = (bool)random_int(0, 1);



        return [
            'hta' => $hta,
            'hta_stage' => ($hta ? random_int(1, 3) : null),
            'hta_risk_type' => ($hta ? random_int(133, 136) : null),
            'hta_description' => ($hta ? fake()->text(500) : null),
            'dyslipidemia' => $dyslipidemia,
            'dyslipidemia_hf' => ($dyslipidemia ? random_int(0, 1) : null),
            'dyslipidemia_type' => ($dyslipidemia ? random_int(138, 139) : null),
            'dyslipidemia_description' => ($dyslipidemia ? fake()->text(500) : null),
            'overweight' => (!$obesity && $overweight),
            'overweight_description' => (!$obesity && $overweight ? fake()->text(500) : null),
            'obesity' => (!$overweight && $obesity),
            'obesity_description' => (!$overweight && $obesity ? fake()->text(500) : null),
            'prediabetic' => (!$diabetic && $prediabetic),
            'prediabetic_description'=> (!$diabetic && $prediabetic ? fake()->text(500) : null),
            'diabetic' => (!$prediabetic && $diabetic),
            'diabetic_description' => (!$prediabetic && $diabetic ? fake()->text(500) : null),
            'ischemic_heart_disease' => $ischemicHeart,
            'ischemic_heart_disease_description' => ($ischemicHeart ? fake()->text(500) : null),
            'arrhythmia' => $arrhythmia,
            'arrhythmia_description' => ($arrhythmia ? fake()->text(500) : null),
            'heart_failure' => $heartFailure,
            'heart_failure_resynchronize' => ($heartFailure ? random_int(0,1) : null),
            'heart_failure_description' => ($heartFailure ? fake()->text(500) : null),
            'smoking' => false,
            'has_been_smoking'=> null,
            'start_date_smoking' => null,
            'smoking_type' => null,
            'ever_quit_smoking' => false,
            'quit_smoking' => false,
            'brief_counseling' => false,
            'time_first_cigar_type' => null,
            'cant_cigar_type' => null,
            'first_hours_cigar' => null,
            'smoking_sick' => null,
            'smoking_prohibited_place' => null,
            'dislike_cigar_type' => null,
            'fagertom_score' => null,
        ];
    }

}
