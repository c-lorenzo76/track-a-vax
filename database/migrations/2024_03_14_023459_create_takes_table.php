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
        Schema::create('takes', function (Blueprint $table) {
            $table->foreignId('patient_id')->constrained('users')->cascadeOnDelete();
            $table->string('scient_name',20);
            $table->foreign('scient_name')->references('scient_name')->on('vaccine')->cascadeOnDelete();
            $table->string('site_name',20);
            $table->foreign('site_name')->references('name')->on('vaccination_site')->cascadeOnDelete();
            $table->primary(['patient_id', 'site_name', 'scient_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takes');
    }
};
