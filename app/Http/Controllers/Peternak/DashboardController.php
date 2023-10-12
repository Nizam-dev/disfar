<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenjualanTernakKambing;
use App\Models\ProfilKambing;
class DashboardController extends Controller
{
    public function index()
    {
        $data =[
            "ternak"=>ProfilKambing::where('user_id',auth()->user()->id)->count(),
            "penjualan"=>PenjualanTernakKambing::where('user_id',auth()->user()->id)->count(),
        ];
        return view('peternak.dashboard',compact('data'));
    }
}
