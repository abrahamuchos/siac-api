<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('anthropometries', function (Blueprint $table) {
            $table->id();
            $table->float('weight', 8, 3);
            $table->unsignedBigInteger('weight_unit_type');
            $table->foreign('weight_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('size', 8, 3);
            $table->unsignedBigInteger('size_unit_type');
            $table->foreign('size_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('abdominal_waist', 8, 3);
            $table->unsignedBigInteger('abdominal_waist_unit_type');
            $table->foreign('abdominal_waist_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('bmi_score');
            $table->unsignedBigInteger('bmi_score_unit_type');
            $table->foreign('bmi_score_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('bsa_score');
            $table->unsignedBigInteger('bsa_score_unit_type');
            $table->foreign('bsa_score_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('anthropometries');
    }
};
