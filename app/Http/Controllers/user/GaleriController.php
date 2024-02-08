<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'galeri' => Galeri::all(),
        );
        return view('user.galeri', $data);
    }

}
