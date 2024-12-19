<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'nama' => 'Ahmad Fauzan',
                'jabatan' => 'Manager',
                'id_atasan' => null,
                'id_user' => 2,
                'kontak' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
