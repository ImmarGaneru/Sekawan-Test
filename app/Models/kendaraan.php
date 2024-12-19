<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Peminjaman;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';

    protected $fillable = [
        'no_polisi',
        'model',
        'merk',
        'tahun_produksi',
        'kapasitas',
        'konsumsi_bbm',
        'jadwal_servis',
        'kategori',
        'status'
    ];

    public function peminjaman()
    {
        return $this->hasMany(peminjaman::class);
    }
}
