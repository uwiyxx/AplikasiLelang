<?php

use App\Models\Petugas;
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
        Schema::create('lelangs', function (Blueprint $table) {
            $table->integer('id_lelang')->primary();
            $table->integer('id_barang')->nullable();
            $table->date('tgl_lelang')->nullable();
            $table->integer('harga_akhir')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('id_petugas')->nullable();
            $table->enum('status',['admin','petugas']);
            $table->foreign('id_barang')->references('id_barang')->on('barangs')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('masyarakats')->onDelete('cascade');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lelangs');
    }
};
