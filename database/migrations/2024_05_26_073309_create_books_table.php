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
            $table->id();
            $table->string('title', 45);
            $table->string('isbn', 45);
            $table->text('deskripsi');
            $table->string('penulis', 45);
            $table->string('penerbit', 45);
            $table->string('cover_img', 45);
            $table->unsignedBigInteger('genres_id');
            $table->timestamps();

            $table->foreign('genres_id')->references('id')->on('genres');
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
