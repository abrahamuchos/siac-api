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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('history_number')->unique();
            $table->string('first_name', 100);
            $table->string('second_name', 100)->nullable();
            $table->string('first_surname', 100);
            $table->string('second_surname', 100)->nullable();
            $table->date('birthdate');
            $table->string('email');
            $table->string('email2')->nullable();
            $table->boolean('gender');
            $table->unsignedBigInteger('blood_type')->nullable();
            $table->foreign('blood_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('id_document', 100);
            $table->unsignedBigInteger('id_document_type');
            $table->foreign('id_document_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
            $table->string('username_instagram', 30)->nullable();
            $table->string('username_twitter', 15)->nullable();
            $table->string('username_facebook', 50)->nullable();
            $table->string('phone_number', 100);
            $table->string('family_phone_number', 100)->nullable();
            $table->timestamp('admission');
            $table->boolean('first_consultation')->default(true);
            $table->unsignedBigInteger('race_type')->nullable();
            $table->foreign('race_type')
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
        Schema::dropIfExists('patients');
    }
};
