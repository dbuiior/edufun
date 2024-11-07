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
        Schema::create('article', function (Blueprint $table) {
            $table->id('article_id');
            $table->string('title');
            $table->string('release_date');
            $table->text('description');
            $table->string('image');
            $table->unsignedBigInteger('writer_id');
            $table->unsignedBigInteger('course_id');

            // Menyertakan foreign key untuk writer_id dan course_id
            $table->foreign('writer_id')->references('writer_id')->on('writer')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('course')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
