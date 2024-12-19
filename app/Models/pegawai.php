<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $fillable = [
        'nama',
        'jabatan',
        'id_atasan',
        'id_user',
        'status_kerja',
        'kontak'
    ];

    /**
     * Relationship with Users (One-to-One)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * Relationship with Pegawai (One-to-Many, for atasan)
     */
    public function bawahan()
    {
        return $this->hasMany(pegawai::class, 'id_atasan');
    }

    public function atasan(){
        return $this->belongsTo(pegawai::class,'id_atasan')->withDefault();
    }

}
