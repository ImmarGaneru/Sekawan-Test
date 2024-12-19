<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\pegawai;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";
    protected $fillable = [
        'id_kendaraan',
        'id_pegawai_peminjam',
        'id_penyetuju_1',
        'id_penyetuju_2',
        'status',
        'tanggal_pinjam',
        'tanggal_kembali',
        'catatan'
    ];

    /**
     * Relationship with Kendaraan
     */
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan');
    }

    /**
     * Relationship with Pegawai (Peminjam)
     */
    public function peminjam()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai_peminjam');
    }

    /**
     * Relationship with Penyetuju 1
     */
    public function penyetuju1()
    {
        return $this->belongsTo(User::class, 'id_penyetuju_1');
    }

    /**
     * Relationship with Penyetuju 2
     */
    public function penyetuju2()
    {
        return $this->belongsTo(User::class, 'id_penyetuju_2');
    }
}
