<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanTernakKambing;
class InformasiKambingController extends Controller
{
    public function informasi($id)
    {
        $data = PenjualanTernakKambing::findOrFail($id);
        return view('guest.informasi',compact('data'));
    }
}
