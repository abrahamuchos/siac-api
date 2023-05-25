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
        Schema::create('ims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('background_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->boolean('q')->default(false);
            $table->boolean('no_q')->default(false);
            $table->year('year')->nullable();
            $table->string('location', 100)->nullable();


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
        Schema::dropIfExists('ims');
    }
};
