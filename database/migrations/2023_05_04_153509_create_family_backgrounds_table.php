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
        Schema::create('family_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('background_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kinship_type')->nullable();
            $table->foreign('kinship_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('age');
            $table->string('other_disease', 500)->nullable();

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
        Schema::table('family_backgrounds', function (Blueprint $table){
            $table->dropForeign('family_backgrounds_background_id_foreign');
            $table->dropForeign('family_backgrounds_kinship_type_foreign');
        });
        Schema::dropIfExists('family_backgrounds');
    }
};
