<?php

namespace App\Http\Controllers;

use App\Models\PenjualanTernakKambing;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $penjualan_ternak = PenjualanTernakKambing::paginate(12);

        foreach($penjualan_ternak as $p){
            $p->lampiran_foto = asset('public/images/kambing/'.$p->lampiran_foto);
        }
        // dd($penjualan_ternak);

        // return $penjualan_ternak;

        return view('guest.home',compact('penjualan_ternak'));
    }

    public function about()
    {
        return view('guest.about');
    }
}
