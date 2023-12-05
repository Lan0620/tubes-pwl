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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('author', 255);
            $table->integer('year');
            $table->string('city', 255);
            $table->string('cover', 255);
            $table->unsignedBigInteger('bookshelfs_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('bookshelfs_id')->references('id')->on('bookshelfs');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
