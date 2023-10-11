<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiKambingController extends Controller
{
    public function informasi($id)
    {
        return view('guest.informasi');
    }
}
