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
        // Use raw SQL to modify the column to auto-increment
        DB::statement('ALTER TABLE report MODIFY COLUMN reportid INT AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Use raw SQL to revert the column back to non-auto-increment
        DB::statement('ALTER TABLE report MODIFY COLUMN reportid INT');
    }
};
