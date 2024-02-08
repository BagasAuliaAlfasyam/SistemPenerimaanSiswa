<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Jurusan;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = array(
            'jurusan' => Jurusan::all(),
            'berita' => Berita::all(),
            'galeri' => Galeri::all(),
        );
        // dd($data);
        return view('user.welcome', $data);
    }
    //

}
