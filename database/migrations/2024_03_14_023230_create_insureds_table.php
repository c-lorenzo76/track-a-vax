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
        Schema::create('insured', function (Blueprint $table) {
            $table->string('company', 20);
            $table->foreignId('patient_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('co_pay', 8, 2);
            $table->primary('patient_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insured');
    }
};
