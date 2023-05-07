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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->boolean('hta')->default(false);
            $table->integer('hta_stage')->nullable();
            $table->unsignedBigInteger('hta_risk_type')->nullable();
            $table->foreign('hta_risk_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('hta_description', 500)->nullable();
            $table->boolean('dyslipidemia')->default(false);
            $table->unsignedBigInteger('dyslipidemia_type')->nullable();
            $table->foreign('dyslipidemia_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('dyslipidemia_description', 500)->nullable();
            $table->boolean('overweight')->default(false);
            $table->string('overweight_description', 500)->nullable();
            $table->boolean('obesity')->default(false);
            $table->string('obesity_description', 500)->nullable();
            $table->boolean('prediabetic')->default(false);
            $table->string('prediabetic_description', 500)->nullable();
            $table->boolean('diabetic')->default(false);
            $table->string('diabetic_description', 500)->nullable();
            $table->boolean('ischemic_heart_disease')->default(false);
            $table->string('ischemic_heart_disease_description', 500)->nullable();
            $table->boolean('arrhythmia')->default(false);
            $table->string('arrhythmia_description', 500)->nullable();
            $table->boolean('heart_failure')->default(false);
            $table->string('heart_failure_description', 500)->nullable();
            $table->boolean('smoking')->default(false);
            $table->string('has_been_smoking', 500)->nullable();
            $table->date('start_date_smoking')->nullable();
            $table->unsignedBigInteger('smoking_type')->nullable();
            $table->foreign('smoking_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('ever_quit_smoking')->default(false);
            $table->boolean('quit_smoking')->default(false);
            $table->boolean('brief_counseling')->default(false);
            $table->unsignedBigInteger('time_first_cigar_type')->nullable();
            $table->foreign('time_first_cigar_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('cant_cigar_type')->nullable();
            $table->foreign('cant_cigar_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('first_hours_cigar')->default(false);
            $table->boolean('smoking_sick')->default(false);
            $table->boolean('smoking_prohibited_place')->default(false);
            $table->unsignedBigInteger('dislike_cigar_type')->nullable();
            $table->foreign('dislike_cigar_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('fagertom_score')->nullable();

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
        Schema::dropIfExists('diagnostics');
    }
};
