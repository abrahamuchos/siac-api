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
        Schema::create('custom_treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('family', 65);
            $table->string('name', 65);
            $table->string('dose', 65)->nullable();
            $table->unsignedBigInteger('unit_type')->nullable();
            $table->foreign('unit_type')
                ->references('id')
                ->on('attributes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('frequency', 100);

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
        Schema::dropIfExists('custom_treatments');
    }
};
