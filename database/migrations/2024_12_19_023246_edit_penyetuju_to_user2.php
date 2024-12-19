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
        Schema::table('users', function (Blueprint $table) {
            // Mengubah kolom 'role' dengan enum baru
            $table->dropColumn('role'); // Hapus kolom lama

            $table->enum('role', ['admin', 'user'])->default('user'); // Tambahkan kolom baru
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Kembalikan kolom 'role' dengan enum lama
            $table->dropColumn('role'); // Hapus kolom baru

            $table->enum('role', ['admin', 'penyetuju'])->default('penyetuju'); // Tambahkan kolom lama
        });
    }
};
