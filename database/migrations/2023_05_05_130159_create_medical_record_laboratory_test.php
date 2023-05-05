<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('medical_record_laboratory_test', function (Blueprint $table) {
            $table->foreignId('medical_record_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onUpdate('cascade');
            $table->foreignId('laboratory_test_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onUpdate('cascade');
            $table->float('result', 8, 4);
            $table->string('src', 100)->nullable();
            $table->time('day_test');

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
        Schema::dropIfExists('medical_record_laboratory_test');
    }
};
