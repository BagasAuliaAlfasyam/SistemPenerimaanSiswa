<?php

namespace App\Http\Controllers\admin;
use App\Models\Kontak;

use App\Http\Controllers\Controller;
class KontakController extends Controller
{
    //
    public function index() {
        $data = array(
            'kontak' => Kontak::all()
        );

        return view('admin.data_kontak.index',$data);
    }
    public function delete($id){
        $kon = Kontak::findorFail($id);
        Kontak::destroy($id);
        return redirect()->route('admin.kontak')->with('success', 'Berhasil Menghapus Kontak');
    }
}
