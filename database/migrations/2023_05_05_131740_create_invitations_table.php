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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('medical_id')->nullable();
            $table->string('email', 100);
            $table->string('first_name', 65);
            $table->string('last_name', 65);
            $table->boolean('gender');
            $table->string('token', 255);
            $table->timestamp('accepted_at');
            $table->timestamp('expires_at');

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
        Schema::dropIfExists('invitations');
    }
};
