<?php

namespace App\Http\Controllers\panitia;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LaporanpgnController extends Controller
{
    //
    public function index()
    {
        $pengumuman = DB::table('pengumuman')
            ->join('calon_siswa', 'calon_siswa.id', '=', 'pengumuman.calon_siswa_id')
            ->join('users', 'users.id', '=', 'calon_siswa.panitia_id')
            ->select('pengumuman.*', 'calon_siswa.nama_siswa', 'calon_siswa.email', 'calon_siswa.no_tlp', 'users.name as nama_panitia')
            ->get();
        $data = array(

            'pengumuman' => $pengumuman,
        );

        return view('panitia.data_laporan.laporan_pgn', $data);
    }
}
