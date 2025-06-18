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
        Schema::create('jobopportunity', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('salary');
            $table->text('requirements');
            $table->string('placement');
            $table->text('description');
            $table->string('videourl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobopportunity');
    }
};
