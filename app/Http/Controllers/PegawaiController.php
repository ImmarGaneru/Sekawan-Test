<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PegawaiController extends Controller
{
    public function index() {
        $pegawai = pegawai::with('atasan:id,nama')->paginate(10);
        return Inertia::render('Pegawai/index',[
            'pegawai'=> $pegawai
        ]);
    }
}
