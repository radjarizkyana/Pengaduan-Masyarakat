<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Carbon\Carbon;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $pending = Pengaduan::where('status', '0')->get()->count();

        $proses = Pengaduan::where('status', 'proses')->get()->count();

        $selesai = Pengaduan::where('status', 'selesai')->get()->count();

        $months = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september',
        'oktober', 'november', 'desember'];

        $pengaduan = Pengaduan::get()->groupBy(function($val) {
            return Carbon::parse($val->created_at)->format('m');
        });

        return view('Admin.rekapitulasi.index', ['pending' => $pending, 'proses' => $proses, 'selesai' => $selesai, 'months' => $months, 'pengaduan' => $pengaduan]);
    }
}
