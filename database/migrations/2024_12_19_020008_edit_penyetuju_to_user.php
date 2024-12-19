<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if(!Schema::hasColumn('users', 'role')) {
                DB::table('users')
                    ->where('role', 'penyetuju')
                    ->update(['role' => 'user']);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert nilai 'user' kembali ke 'penyetuju'
            if (Schema::hasColumn('users', 'role')) {
                DB::table('users')
                    ->where('role', 'user')
                    ->update(['role' => 'penyetuju']);
            }
        });
    }
};
