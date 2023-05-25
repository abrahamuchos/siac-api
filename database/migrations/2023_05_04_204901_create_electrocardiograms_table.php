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
        Schema::create('electrocardiograms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rhythm_type')->nullable();
            $table->foreign('rhythm_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('rhythm_type_description', 100)->nullable();
            $table->integer('rhythm_frequency')->nullable();
            $table->unsignedBigInteger('rhythm_frequency_unit_type')->nullable();
            $table->foreign('rhythm_frequency_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('rhythm_pr')->nullable();
            $table->unsignedBigInteger('rhythm_pr_unit_type')->nullable();
            $table->foreign('rhythm_pr_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('rhythm_qrs')->nullable();
            $table->unsignedBigInteger('rhythm_qrs_unit_type')->nullable();
            $table->foreign('rhythm_qrs_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('axes_p')->nullable();
            $table->unsignedBigInteger('axes_p_unit_type')->nullable();
            $table->foreign('axes_p_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('axes_t')->nullable();
            $table->unsignedBigInteger('axes_t_unit_type')->nullable();
            $table->foreign('axes_t_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('axes_qt')->nullable();
            $table->unsignedBigInteger('axes_qt_unit_type')->nullable();
            $table->foreign('axes_qt_unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('description', 500)->nullable();
            $table->string('img', 100)->nullable();


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
        Schema::dropIfExists('electrocardiograms');
    }
};
