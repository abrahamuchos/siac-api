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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('iso3', 100)->nullable();
            $table->string('iso2', 100)->nullable();
            $table->string('numeric_code', 100)->nullable();
            $table->string('phone_code', 100)->nullable();
            $table->string('capital', 100)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('subregion', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
