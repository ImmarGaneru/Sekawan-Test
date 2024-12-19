<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        DB::table('pegawai')->insert([
            [
                'nama' => 'Siti Aisyah',
                'jabatan' => 'Supervisor',
                'id_atasan' => 1,
                'id_user' => 3,
                'kontak' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Indra Wijaya',
                'jabatan' => 'Supervisor',
                'id_atasan' => 1,
                'id_user' => 4,
                'kontak' => '081234567894',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Fitria Sari',
                'jabatan' => 'Supervisor',
                'id_atasan' => 1,
                'id_user' => 5,
                'kontak' => '081234567897',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
