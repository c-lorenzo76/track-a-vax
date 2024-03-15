<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lot', function (Blueprint $table) {
            $table->string('scient_name',20);
            $table->foreign('scient_name')->references('scient_name')->on('vaccine')->cascadeOnDelete();
            $table->integer('number');
            $table->string('mfr_place', 20);
            $table->date('expiration');
            $table->primary(['scient_name', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lot');
    }
};
