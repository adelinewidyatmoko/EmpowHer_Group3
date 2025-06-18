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
        Schema::create('course', function (Blueprint $table) {
            $table->id('courseid');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('provider')->default('EmpowHer');
            $table->string('type')->default('default');
            $table->string('duration')->default('8 weeks');
            $table->boolean('is_featured')->default(false);
            $table->integer('enrolled_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
