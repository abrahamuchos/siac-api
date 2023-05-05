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
        Schema::create('pulse_mean_arterial_pressures', function (Blueprint $table) {
            $table->id();
            $table->integer('systolic_blood_pressure');
            $table->integer('diastolic_blood_pressure');
            $table->unsignedBigInteger('unit_type');
            $table->foreign('unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('pulse_pressure');
            $table->float('mean_arterial_pressure');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('pulse_mean_arterial_pressures');
    }
};
