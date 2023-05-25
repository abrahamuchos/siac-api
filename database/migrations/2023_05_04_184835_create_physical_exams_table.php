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
        Schema::create('physical_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_aspect_type')->nullable();
            $table->foreign('general_aspect_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('other_observation', 500)->nullable();
            $table->boolean('sinus_x')->default(false);
            $table->boolean('cvy')->default(false);
            $table->integer('oscillating_stop')->nullable();
            $table->unsignedBigInteger('oscillating_stop_unit_type')->nullable();
            $table->foreign('oscillating_stop_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('pvy_other', 100)->nullable();
            $table->boolean('carotid_beats_symmetrical')->nullable();
            $table->boolean('carotid_beats_homocrote')->nullable();
            $table->boolean('carotid_beats_normal_width')->nullable();
            $table->boolean('apex_is_palpable')->nullable();
            $table->boolean('apex_displaced')->nullable();
            $table->unsignedBigInteger('apex_characteristic_type')->nullable();
            $table->foreign('apex_characteristic_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('auscultation_regular')->nullable();
            $table->unsignedBigInteger('auscultation_r1_type')->nullable();
            $table->foreign('auscultation_r1_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('auscultation_r2_type')->nullable();
            $table->foreign('auscultation_r2_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('auscultation_r3')->nullable();
            $table->boolean('auscultation_r4')->nullable();
            $table->boolean('auscultation_gallop_pace')->nullable();
            $table->boolean('peripheral_pulses_symmetrical')->nullable();
            $table->integer('peripheral_pulses_mi')->nullable();
            $table->integer('peripheral_pulses_mid')->nullable();
            $table->integer('peripheral_pulses_mii')->nullable();
            $table->integer('edema_lower_limbs')->nullable();
            $table->integer('itb_right_ankle_pressure')->nullable();
            $table->integer('itb_right_arm_pressure')->nullable();
            $table->integer('itb_left_ankle_pressure')->nullable();
            $table->integer('itb_left_arm_pressure')->nullable();
            $table->float('score_itb')->nullable();

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
        Schema::dropIfExists('physical_exams');
    }
};
