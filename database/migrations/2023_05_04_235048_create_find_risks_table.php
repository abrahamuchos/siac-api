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
        Schema::create('find_risks', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->float('bmi');
            $table->boolean('hta');
            $table->boolean('high_blood_glucose');
            $table->unsignedBigInteger('physical_activity_type');
            $table->foreign('physical_activity_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('consumption_vegetable');
            $table->unsignedBigInteger('family_diabetic_type');
            $table->foreign('family_diabetic_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('score');
            $table->float('risk_percentage');

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
        Schema::dropIfExists('find_risks');
    }
};
