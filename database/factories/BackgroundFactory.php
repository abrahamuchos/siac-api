<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Disease;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Background>
 */
class BackgroundFactory extends Factory
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
        $prediabetic = (bool)random_int(0, 1);
        $diabetic = (bool)random_int(0, 1);
        $dyslipidemia = (bool)random_int(0, 1);
        $revascularized = (bool)random_int(0, 1);
        $surgical = (bool)random_int(0, 1);
        $percutaneous = (bool)random_int(0, 1);
        $arrhythmiaFa = (bool)random_int(0, 1);
        $arrhythmiaFaAblation = (bool)random_int(0, 1);
        $arrhythmiaFaAnti = (bool)random_int(0, 1);
        $arrhythmiaFaCdi = (bool)random_int(0, 1);
        $heartFailure = (bool)random_int(0, 1);
        $peripheralArterialDisease = (bool)random_int(0, 1);
        $chronicKidneyDisease = (bool)random_int(0, 1);
        $ictus = (bool)random_int(0, 1);


        $diagnosticTime = Attribute::find(88)->childAttributes()->get();
        $numbersOptions = Attribute::find(100)->childAttributes()->get();
        $hasBledRiskType = Attribute::find(192)->childAttributes()->get();
        $hasBledRecommendation = Attribute::find(198)->childAttributes()->get();
        $arrhythmiaFaDisease = Disease::find(1)->childDiseases()->get();
        $ictusDiseases = Disease::find(4)->childDiseases()->get();


        return [
            'hta' => $hta,
            'hta_controlled' => ($hta ? random_int(0, 1) : null),
            'hta_diagnostic_time_type' => ($hta ? $diagnosticTime->random() : null),
            'prediabetic' => (!$diabetic ? $prediabetic : false),
            'prediabetic_controlled' => (!$diabetic && $prediabetic ? random_int(0, 1) : null),
            'prediabetic_diagnostic_time_type' => ($prediabetic ? $diagnosticTime->random() : null),
            'diabetic' => (!$prediabetic ? $diabetic : false),
            'diabetic_controlled' => (!$prediabetic && $diabetic ? random_int(0, 1) : null),
            'diabetic_diagnostic_time_type' => (!$prediabetic && $diabetic ? $diagnosticTime->random() : null),
            'dyslipidemia' => $dyslipidemia,
            'dyslipidemia_controlled' => ($dyslipidemia ? random_int(0, 1) : null),
            'dyslipidemia_diagnostic_time_type' => ($dyslipidemia ? $diagnosticTime->random() : null),
            'hypertensive_emergency' => random_int(0, 1),
            'diabetic_emergency' => ($prediabetic || $diabetic ? random_int(0, 1) : null),

            //Síndrome Coronario agudo
            'acute_coronary_syndrome' => (bool)random_int(0, 1),

            //Síndrome Coronario agudo
            'chronic_coronary_syndrome' => (bool)random_int(0, 1),
            'chronic_coronary_syndrome_year' => random_int(2000, 2020),

            //Revascularizado
            'revascularized' => $revascularized,
            'surgical' => ($revascularized ? $surgical : false),
            'surgical_year' => ($revascularized && $surgical ? random_int(2000, 2020) : null),
            'surgical_number_bridge_type' => ($revascularized && $surgical ? $numbersOptions->random() : null),
            'percutaneous' => ($revascularized ? $percutaneous : false),
            'percutaneous_year' => ($revascularized && $percutaneous ? random_int(2000, 2020) : null),
            'percutaneous_number_glass_type' => ($revascularized && $percutaneous ? $numbersOptions->random() : null),
            'percutaneous_number_stent_type' => ($revascularized && $percutaneous ? $numbersOptions->random() : null),
            'percutaneous_medicated' => ($revascularized && $percutaneous ? random_int(0, 1) : false),
            'canadian_functional_class' => (random_int(0, 1) ? random_int(1, 4) : false),

            // Arritmia
            //FA
            'arrhythmia_fa' => $arrhythmiaFa,
            'arrhythmia_fa_year' => ($arrhythmiaFa ? random_int(2000, 2020) : null),
            'arrhythmia_fa_disease_id' => ($arrhythmiaFa ? $arrhythmiaFaDisease->random() : null),
            'arrhythmia_fa_pharmacotherapy' => ($arrhythmiaFa && random_int(0, 1) ? fake()->text(100) : null),
            'arrhythmia_fa_others_pharmacotherapy' => ($arrhythmiaFa && random_int(0, 1) ? fake()->text(500) : null),
            'arrhythmia_fa_ablation' => ($arrhythmiaFa && $arrhythmiaFaAblation ? true : null),
            'arrhythmia_fa_ablation_year' => ($arrhythmiaFa && $arrhythmiaFaAblation ? fake()->year : null),
            'arrhythmia_fa_anticoagulated' => ($arrhythmiaFa && $arrhythmiaFaAnti ? true : null),
            'arrhythmia_fa_anticoagulated_pharmacotherapy' => ($arrhythmiaFa && $arrhythmiaFaAnti && random_int(0,
                1) ? fake()->text(100) : null),
            'arrhythmia_fa_cdi' => ($arrhythmiaFa ? $arrhythmiaFaCdi : null),
            'arrhythmia_fa_cdi_year' => ($arrhythmiaFa && $arrhythmiaFaCdi ? fake()->year : null),
            'has_bled_hta' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_renal_disease' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_liver_disease' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_history_strokes' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_bleeding' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_inr' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_medications_blood' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_alcohol' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'has_bled_score' => ($arrhythmiaFa ? $hasBledRiskType->random() : null),
            'has_bled_bleeding_risk' => ($arrhythmiaFa ? 3.4 : null),
            'has_bled_bleeding_patients' => ($arrhythmiaFa ? 1.02 : null),
            'has_bled_recommendation_type' => ($arrhythmiaFa ? $hasBledRecommendation->random() : null),
            'chad_heart_failure' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'chad_liver_disease' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'chad_ictus' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'chad_vascular_disease' => ($arrhythmiaFa ? random_int(0, 1) : null),
            'chad_score' => ($arrhythmiaFa ? random_int(0, 9) : null),
            'chad_risk_ischemic_stroke' => ($arrhythmiaFa ? 2.2 : null),
            'chad_risk_ictus' => ($arrhythmiaFa ? 4.60 : null),

            // Insuficiencia cardiaca
            'heart_failure' => $heartFailure,
            'heart_failure_date' => ($heartFailure ? random_int(2000,2020).'-'.random_int(1,12).'-1' : null),
            'heart_failure_nyha_functional_class' => ($heartFailure ? random_int(1,4) : null),

            // Enfermedad Arterial Periférica
            'peripheral_arterial_disease' => $peripheralArterialDisease,
            'peripheral_arterial_disease_territory_id' => (int) random_int(1,3),

            //Enfermedad Renal Crónica
            'chronic_kidney_disease' => $chronicKidneyDisease,
            'chronic_kidney_disease_stage' => ($chronicKidneyDisease ? random_int(1, 5) : null),
            'chronic_kidney_disease_dialysis' => ($chronicKidneyDisease ? (bool) random_int(0,1) : null),

            //Enfermedad cerebrovascular ICTUS
            'ictus' => $ictus,
            'ictus_year' => ($ictus ? random_int(2000, 2020) : null),
            'ictus_disease_id' => ($ictus ? $ictusDiseases->random() : null),

            //Antecedentes relevantes no cardiovasculares
            'relevant_noncardiovascular' => ( (bool) random_int(0,1) ? fake()->text(500) : null),
            'custom_treatment' => ( (bool) random_int(0,1) ? fake()->text(500) : null)
        ];
    }

}
