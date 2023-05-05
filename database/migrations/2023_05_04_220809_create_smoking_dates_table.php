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
        Schema::create('smoking_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diagnostic_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('abandon_date');
            $table->date('reset_date');

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
        Schema::dropIfExists('smoking_dates');
    }
};
