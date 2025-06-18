<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('jobopportunity', function (Blueprint $table) {
            $table->text('requirements')->change(); // Change column type to text
            $table->string('salary', 50)->change(); // Change column type to string with a specific length
        });

        DB::table('jobopportunity')->truncate();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobopportunity', function (Blueprint $table) {
            $table->string('requirements', 255)->change(); // Revert back to string with default length
            $table->integer('salary')->change(); // Revert back to integer
        });
    }
};