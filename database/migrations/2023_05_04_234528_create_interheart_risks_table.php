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
        Schema::create('interheart_risks', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->unsignedBigInteger('use_tobacco_type');
            $table->foreign('use_tobacco_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('cant_tobacco_type');
            $table->foreign('cant_tobacco_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('passive_smoker_type');
            $table->foreign('passive_smoker_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('diabetic');
            $table->boolean('hta');
            $table->boolean('family_history');
            $table->unsignedBigInteger('waist_hip_ratio_type');
            $table->foreign('waist_hip_ratio_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('psychosocial_factor_type');
            $table->foreign('psychosocial_factor_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('score');

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
        Schema::dropIfExists('interheart_risks');
    }
};
