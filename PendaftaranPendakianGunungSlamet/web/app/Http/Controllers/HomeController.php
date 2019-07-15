<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JadwalPendakian;
use App\Galeri;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kuota = DB::table('kuota')->sum('kuota');
        $jumlah_pendaki = DB::table('pendaki')->count('id');
        $jumlah_jadwal = DB::table('jadwal_pendakian')->count('kode_pendakian');
        $total_tarif = DB::table('pendaki')->sum('biaya');
        $galeri = Galeri::all();
        return view('pages.admin.dashboard', [
            'galleries' => $galeri, 
            'kuota' => $kuota, 
            'jadwal' => $jumlah_jadwal, 
            'pendaki' => $jumlah_pendaki, 
            'tarif' => $total_tarif]);
    }

    public function jadwal()
    {
        $jadwal = JadwalPendakian::all();
        return view('pages.admin.jadwal', ['jadwal' => $jadwal]);
    }
}
