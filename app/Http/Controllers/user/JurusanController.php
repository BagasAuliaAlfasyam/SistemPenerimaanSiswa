<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'jurusan' => Jurusan::all(),
        );

        return view('user.jurusan', $data);
    }
}
