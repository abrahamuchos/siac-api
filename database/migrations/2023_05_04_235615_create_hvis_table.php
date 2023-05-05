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
        Schema::create('hvis', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('wave_r_cornell')->nullable();
            $table->integer('wave_s_cornell')->nullable();
            $table->integer('score_cornell')->nullable();
            $table->integer('wave_s_vi_sokolow')->nullable();
            $table->integer('wave_r_sokolow')->nullable();
            $table->integer('score_sokolow')->nullable();


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
        Schema::dropIfExists('hvis');
    }
};
