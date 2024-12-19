<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        DB::table('pegawai')->insert([
            [
                'nama' => 'Budi Santoso',
                'jabatan' => 'Staff',
                'id_atasan' => 2,
                'id_user' => null,
                'kontak' => '081234567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ratna Dewi',
                'jabatan' => 'Staff',
                'id_atasan' => 2,
                'id_user' => null,
                'kontak' => '081234567893',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Citra Kirana',
                'jabatan' => 'Staff',
                'id_atasan' => 3,
                'id_user' => null,
                'kontak' => '081234567895',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi Pratama',
                'jabatan' => 'Staff',
                'id_atasan' => 3,
                'id_user' => null,
                'kontak' => '081234567896',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dedi Supriyadi',
                'jabatan' => 'Staff',
                'id_atasan' => 4,
                'id_user' => null,
                'kontak' => '081234567898',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nurul Hidayah',
                'jabatan' => 'Staff',
                'id_atasan' => 4,
                'id_user' => null,
                'kontak' => '081234567899',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
