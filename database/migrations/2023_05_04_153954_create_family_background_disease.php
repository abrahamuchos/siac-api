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
        Schema::create('disease_family_background', function (Blueprint $table) {
            $table->foreignId('family_background_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('disease_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('disease_family_background', function (Blueprint $table){
            $table->dropForeign('disease_family_background_family_background_id_foreign');
            $table->dropForeign('disease_family_background_disease_id_foreign');
        });
        Schema::dropIfExists('family_background_disease');
    }
};
