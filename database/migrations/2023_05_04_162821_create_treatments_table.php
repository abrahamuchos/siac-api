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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treatment_id')->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name',100);
            $table->unsignedBigInteger('unit_type')->nullable();
            $table->foreign('unit_type')
                ->references('id')
                ->on('attributes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('warning', 100)->nullable();
            $table->boolean('frequency_qd')->default(false);
            $table->boolean('frequency_bid')->default(false);
            $table->boolean('frequency_tid')->default(false);
            $table->boolean('frequency_qid')->default(false);
            $table->float('dose_min')->nullable();
            $table->float('dose_max')->nullable();
            $table->boolean('is_available')->default(true);

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
        Schema::dropIfExists('treatments');
    }
};
