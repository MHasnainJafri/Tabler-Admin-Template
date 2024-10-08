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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('status',['pending','blocked','published'])->default('pending');
            $table->string('thumbnail');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // user who created the course
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // course category
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
