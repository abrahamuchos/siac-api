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
        Schema::create('atherogenic_dyslipidemias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cvr_type');
            $table->foreign('cvr_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('c_n_hdl')->nullable();
            $table->integer('apo_b')->nullable();
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
        Schema::dropIfExists('atherogenic_dyslipidemias');
    }
};
