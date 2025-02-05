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
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('id_petugas')->primary();
            $table->string('nama_petugas',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('password',50)->nullable();
            $table->integer('id_level')->nullable();
            $table->foreign('id_level')->references('id_level')->on('levels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
