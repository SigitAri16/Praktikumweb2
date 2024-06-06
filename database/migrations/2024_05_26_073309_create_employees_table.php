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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->string('alamat', 45);
            $table->string('nohp', 45);
            $table->string('email', 45);
            $table->date('tanggal_lahir', 45);
            $table->unsignedBigInteger('positions_id');
            $table->timestamps();
            

            $table->foreign('positions_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
