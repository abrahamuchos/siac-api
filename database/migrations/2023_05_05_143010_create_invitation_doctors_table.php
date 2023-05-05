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
        Schema::create('invitation_doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('doctor_id');

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
        Schema::dropIfExists('invitation_doctors');
    }
};
