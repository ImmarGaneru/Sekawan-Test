<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index() {
        $peminjaman = peminjaman::with(['kendaraan', 'peminjam', 'penyetuju1', 'penyetuju2'])->paginate(10);
        return Inertia::render('Peminjaman/index',[
            'peminjaman'=> $peminjaman
        ]);
    }
}
