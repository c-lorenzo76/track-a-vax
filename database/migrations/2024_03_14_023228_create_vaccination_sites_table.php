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
        Schema::create('vaccination_site', function (Blueprint $table) {
            $table->string('name', 20)->primary();
            $table->string('addr_street', 40);
            $table->string('addr_city', 20);
            $table->string('addr_state', 20);
            $table->decimal('addr_zip', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_site');
    }
};
