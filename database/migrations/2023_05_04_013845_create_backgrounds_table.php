<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->boolean('hta')->default(false);
            $table->unsignedBigInteger('hta_diagnostic_time_type')->nullable();
            $table->foreign('hta_diagnostic_time_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('prediabetic')->default(false);;
            $table->unsignedBigInteger('prediabetic_diagnostic_time_type')->nullable();
            $table->foreign('prediabetic_diagnostic_time_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('diabetic')->default(false);;
            $table->boolean('diabetic_controlled')->nullable();
            $table->unsignedBigInteger('diabetic_diagnostic_time_type')->nullable();
            $table->foreign('diabetic_diagnostic_time_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('dyslipidemia')->default(false);;
            $table->boolean('dyslipidemia_controlled')->nullable();
            $table->unsignedBigInteger('dyslipidemia_diagnostic_time_type')->nullable();
            $table->foreign('dyslipidemia_diagnostic_time_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('hypertensive_emergency')->default(false);;
            $table->boolean('diabetic_emergency')->nullable();
            $table->boolean('acute_coronary_syndrome')->default(false);
            $table->boolean('chronic_coronary_syndrome')->default(false);
            $table->year('chronic_coronary_syndrome_year')->nullable();
            $table->boolean('revascularized')->default(false);
            $table->boolean('surgical')->default(false);
            $table->year('surgical_year')->nullable();
            $table->unsignedBigInteger('surgical_number_bridge_type')->nullable();
            $table->foreign('surgical_number_bridge_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('percutaneous')->default(false);
            $table->year('percutaneous_year')->nullable();
            $table->unsignedBigInteger('percutaneous_number_glass_type')->nullable();
            $table->foreign('percutaneous_number_glass_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('percutaneous_number_stent_type')->nullable();
            $table->foreign('percutaneous_number_stent_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('percutaneous_medicated')->default(false);
            $table->integer('canadian_functional_class')->nullable();
            $table->boolean('arrhythmia_fa')->default(false);
            $table->year('arrhythmia_fa_year')->nullable();
            $table->unsignedBigInteger('arrhythmia_fa_disease_id')->nullable();
            $table->foreign('arrhythmia_fa_disease_id')
                ->references('id')
                ->on('diseases')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('arrhythmia_fa_pharmacotherapy', 100)->nullable();
            $table->string('arrhythmia_fa_others_pharmacotherapy', 500)->nullable();
            $table->boolean('arrhythmia_fa_ablation')->nullable();
            $table->year('arrhythmia_fa_ablation_year')->nullable();
            $table->boolean('arrhythmia_fa_anticoagulated')->nullable();
            $table->string('arrhythmia_fa_anticoagulated_pharmacotherapy', 100)->nullable();
            $table->boolean('arrhythmia_fa_cdi')->nullable();
            $table->year('arrhythmia_fa_cdi_year')->nullable();
            $table->boolean('has_bled_hta')->nullable();
            $table->boolean('has_bled_renal_disease')->nullable();
            $table->boolean('has_bled_liver_disease')->nullable();
            $table->boolean('has_bled_history_strokes')->nullable();
            $table->boolean('has_bled_bleeding')->nullable();
            $table->boolean('has_bled_inr')->nullable();
            $table->boolean('has_bled_medications_blood')->nullable();
            $table->boolean('has_bled_alcohol')->nullable();
            $table->integer('has_bled_score')->nullable();
            $table->unsignedBigInteger('has_bled_risk_type')->nullable();
            $table->foreign('has_bled_risk_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('has_bled_bleeding_risk')->nullable();
            $table->float('has_bled_bleeding_patients')->nullable();
            $table->unsignedBigInteger('has_bled_recommendation_type')->nullable();
            $table->foreign('has_bled_recommendation_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('chad_heart_failure')->nullable();
            $table->boolean('chad_liver_disease')->nullable();
            $table->boolean('chad_ictus')->nullable();
            $table->boolean('chad_vascular_disease')->nullable();
            $table->integer('chad_score')->nullable();
            $table->float('chad_risk_ischemic_stroke')->nullable();
            $table->float('chad_risk_ictus')->nullable();
            $table->boolean('heart_failure')->default(false);
            $table->date('heart_failure_date')->nullable();
            $table->integer('heart_failure_nyha_functional_class')->nullable();
            $table->boolean('peripheral_arterial_disease')->default(false);
            $table->unsignedBigInteger('peripheral_arterial_disease_territory_id')->nullable();
            $table->foreign('peripheral_arterial_disease_territory_id')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('chronic_kidney_disease')->default(false);
            $table->integer('chronic_kidney_disease_stage')->nullable();
            $table->boolean('chronic_kidney_disease_dialysis')->nullable();
            $table->boolean('ictus')->default(false);
            $table->year('ictus_year')->nullable();
            $table->unsignedBigInteger('ictus_disease_id')->nullable();
            $table->foreign('ictus_disease_id')
                ->references('id')
                ->on('diseases')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('relevant_noncardiovascular', 500)->nullable();
            $table->string('custom_treatment', 500)->nullable();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('backgrounds');
    }
};
