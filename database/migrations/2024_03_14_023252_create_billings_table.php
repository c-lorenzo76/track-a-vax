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
        /** so the reason why i did string 'site_name' first and not just reference by
           $table->foreignId('name')->constrained('users') is because I wanted to name the column site_name
           if i would've done that way it would've just named it based on what the column name is on the table it's
           referencing.

        **/
        Schema::create('billing', function (Blueprint $table) {
            $table->string('site_name', 20);
            $table->foreign('site_name')->references('name')->on('vaccination_site')->cascadeOnDelete();
            $table->foreignId('patient_id')->constrained('users')->cascadeOnDelete();
            $table->primary(['site_name', 'patient_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing');
    }
};
