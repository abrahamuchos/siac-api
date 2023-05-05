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
        Schema::create('dyslipidemia_reduce_residual_risks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_risk_type');
            $table->foreign('patient_risk_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('tg_hdlc');
            $table->unsignedBigInteger('result_type');
            $table->foreign('result_type')
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
        Schema::dropIfExists('dyslipidemia_reduce_residual_risks');
    }
};

