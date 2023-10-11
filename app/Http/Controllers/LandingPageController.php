<?php

namespace App\Http\Controllers;

use App\Models\PenjualanTernakKambing;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $penjualan_ternak = PenjualanTernakKambing::all();

        foreach($penjualan_ternak as $p){
            $p->lampiran_foto = asset('public/images/kambing/'.$p->lampiran_foto);
        }
        // return $penjualan_ternak;

        return view('guest.home',compact('penjualan_ternak'));
    }
}
