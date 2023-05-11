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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->unique();;
            $table->string('first_name', 100);
            $table->string('second_name', 100)->nullable();
            $table->string('first_surname', 100)->nullable();
            $table->string('second_surname', 100)->nullable();
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('public_email')->nullable();
            $table->string('id_document', 100);
            $table->unsignedBigInteger('id_document_type');
            $table->foreign('id_document_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('medical_document', 100)->nullable();
            $table->boolean('gender');
            $table->string('office_phone', 100);
            $table->string('office_phone2', 100)->nullable();
            $table->string('cellphone', 100)->nullable();
            $table->unsignedBigInteger( 'grade_type');
            $table->foreign('grade_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('username_instagram', 30)->nullable();
            $table->string('username_twitter', 15)->nullable();
            $table->string('username_facebook', 50)->nullable();
            $table->string('website', 255)->nullable();
            $table->foreignId('country_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('state_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('city_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('address', 255);
            $table->string('postal_code', 9)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->string('letterhead', 100)->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
};
