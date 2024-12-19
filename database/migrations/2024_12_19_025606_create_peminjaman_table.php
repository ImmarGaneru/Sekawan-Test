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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id')->on('kendaraan')->onDelete('cascade');
            $table->unsignedBigInteger('id_pegawai_peminjam');
            $table->foreign('id_pegawai_peminjam')->references('id')->on('pegawai')->onDelete('cascade');
            $table->unsignedBigInteger('id_penyetuju_1')->nullable();
            $table->foreign('id_penyetuju_1')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('id_penyetuju_2')->nullable();
            $table->foreign('id_penyetuju_2')->references('id')->on('users')->onDelete('set null');
            $table->enum('status', ['pending', 'berlangsung', 'selesai', 'ditolak'])->default('pending');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
