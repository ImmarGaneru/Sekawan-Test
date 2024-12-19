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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('model');
            $table->string('plat_nomor');
            $table->year('tahun_produksi');
            $table->integer('kapasitas');
            $table->float('konsumsi_bbm(L)')->nullable();
            $table->date('jadwal_service')->nullable();
            $table->enum('kategori', ['angkutan_barang', 'angkutan_penumpang'])->nullable();
            $table->enum('status', ['tersedia', 'dipinjam', 'rusak', 'diservice'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
