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
        Schema::create('glomerular_filtrations', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->boolean('afro_american');
            $table->float('serum_creatinine');
            $table->unsignedBigInteger('serum_creatinine_unit_type');
            $table->foreign('serum_creatinine_unit_type')
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
        Schema::dropIfExists('glomerular_filtrations');
    }
};
