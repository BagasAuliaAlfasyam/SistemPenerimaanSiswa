<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Jurusan;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'jurusan' => Jurusan::all(),
            'berita' => Berita::all(),
            'galeri' => Galeri::all(),
        );
        return view('siswa/dashboard', $data);
    }
}
