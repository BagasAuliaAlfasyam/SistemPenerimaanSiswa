<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'kontak' => Kontak::all(),
        );

        return view('user.kontak', $data);
    }
    public function store(Request $request)
    {
        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'judul' => $request->judul,
            'komentar' => $request->komentar,

        ]);
        return redirect()->route('user.kontak')->with('status', 'Berhasil Meambahkan kontak');
    }
}
