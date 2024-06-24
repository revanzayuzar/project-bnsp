<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

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
        $pegawai = Pegawai::all();

        $totalPegawai = Pegawai::count();
        $totalPegawaiLakiLaki = Pegawai::where('jenis_kelamin', 'Laki-Laki')->count();
        $totalPegawaiPerempuan = Pegawai::where('jenis_kelamin', 'Perempuan')->count();
        $totalPegawaiTetap = Pegawai::where('status_pegawai', 'Tetap')->count();
        $totalPegawaiKontrak = Pegawai::where('status_pegawai', 'Kontrak')->count();
        $totalPegawaiMagang = Pegawai::where('status_pegawai', 'Magang')->count();

        return view('admin.dashboard.index', compact(
            'pegawai',
            'totalPegawai',
            'totalPegawaiLakiLaki',
            'totalPegawaiPerempuan',
            'totalPegawaiTetap',
            'totalPegawaiKontrak',
            'totalPegawaiMagang'
        ));
    }
}
