<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KendaraanController extends Controller
{
    public function index() {
        $kendaraan = kendaraan::paginate(10);
        return Inertia::render('Kendaraan/index', [
            'kendaraan'=> $kendaraan
        ]);
    }
}
