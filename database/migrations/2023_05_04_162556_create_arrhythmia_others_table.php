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
        Schema::create('arrhythmia_others', function (Blueprint $table) {
            $table->id();
            $table->foreignId('background_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->year('year');
            $table->string('pharmacotherapy', 100)->nullable();
            $table->string('other_pharmacotherapy', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('arrhythmia_others');
    }
};
