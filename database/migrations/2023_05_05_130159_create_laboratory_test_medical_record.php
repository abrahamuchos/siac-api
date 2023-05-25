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
        Schema::create('laboratory_test_medical_record', function (Blueprint $table) {
            $table->foreignId('medical_record_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('laboratory_test_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->float('result', 8, 4);
            $table->string('src', 100)->nullable();
            $table->timestamp('test_date');

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
        Schema::table('laboratory_test_medical_record', function (Blueprint $table){
           $table->dropForeign('laboratory_test_medical_record_medical_record_id_foreign');
           $table->dropForeign('laboratory_test_medical_record_laboratory_test_id_foreign');
        });

        Schema::dropIfExists('medical_record_laboratory_test');
    }
};
