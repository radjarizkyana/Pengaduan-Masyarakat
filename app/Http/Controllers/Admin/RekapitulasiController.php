<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $pending = Pengaduan::where('status', '0')->get()->count();

        $proses = Pengaduan::where('status', 'proses')->get()->count();

        $selesai = Pengaduan::where('status', 'selesai')->get()->count();

        return view('Admin.rekapitulasi.index', ['pending' => $pending, 'proses' => $proses, 'selesai' => $selesai]);
    }
}
