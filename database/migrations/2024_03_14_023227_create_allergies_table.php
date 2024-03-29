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
        Schema::create('allergy', function (Blueprint $table) {

            $table->string('allergy', 20);
            $table->foreignId('patient_id')->constrained('users')->cascadeOnDelete();
            $table->primary(['patient_id', 'allergy']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergy');
    }
};
