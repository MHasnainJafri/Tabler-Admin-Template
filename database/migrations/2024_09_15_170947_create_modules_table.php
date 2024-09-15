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
        Schema::create('modules', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('video');
            $table->text('description');
            $table->string('thumbnail');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // module belongs to course
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
