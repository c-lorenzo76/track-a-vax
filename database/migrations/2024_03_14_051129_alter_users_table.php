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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('f_name', 20)->nullable(false);
            $table->char('m_initial', 1)->nullable()->default(null);
            $table->string('l_name', 20)->nullable(false);
            $table->date('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('f_name');
            $table->dropColumn('m_initial');
            $table->dropColumn('l_name');
            $table->dropColumn('dob');
        });
    }
};
