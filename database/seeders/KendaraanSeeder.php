<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $tahunProduksi = range(2010, 2023);

        
        $data[0] = [
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'plat_nomor' => 'N 5678 CD',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[1] = [
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'plat_nomor' => 'N 9012 EF',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[2] = [
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'plat_nomor' => 'N 3456 GH',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[3] = [
            'merk' => 'Toyota',
            'model' => 'Innova',
            'plat_nomor' => 'N 2345 KL',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[4] = [
            'merk' => 'Toyota',
            'model' => 'Innova',
            'plat_nomor' => 'N 6789 MN',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[5] = [
            'merk' => 'Toyota',
            'model' => 'Innova',
            'plat_nomor' => 'N 1234 OP',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[6] = [
            'merk' => 'Honda',
            'model' => 'Brio',
            'plat_nomor' => 'N 5678 QR',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[7] = [
            'merk' => 'Honda',
            'model' => 'BRV',
            'plat_nomor' => 'N 9012 ST',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_penumpang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[8] = [
            'merk' => 'Mitsubishi',
            'model' => 'L300',
            'plat_nomor' => 'N 1235 AC',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_barang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[9] = [
            'merk' => 'Daihatsu',
            'model' => 'Gran Max PU',
            'plat_nomor' => 'N 1234 AB',
            'tahun_produksi' => $tahunProduksi[array_rand($tahunProduksi)],
            'kapasitas' => rand(2, 8) * 100, // Kapasitas antara 200 - 800
            'konsumsi_bbm(L)' => rand(500, 2000) / 10, // Konsumsi BBM antara 50.0 - 200.0 liter
            'jadwal_service' => now()->addDays(rand(30, 365)), // Jadwal random dalam 1 tahun ke depan
            'kategori' => 'angkutan_barang',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('kendaraan')->insert($data);
    }
}
