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
        Schema::create('history__lelangs', function (Blueprint $table) {
            $table->integer('id_history')->primary();
            $table->integer('id_lelang')->nullable();
            $table->integer('id_barang')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('penawaran_harga')->nullable();
            $table->foreign('id_lelang')->references('id_lelang')->on('lelangs')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barangs')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('masyarakats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history__lelangs');
    }
};
