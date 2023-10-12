<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilKambing;
use App\Models\PenjualanTernakKambing;

class DashboardController extends Controller
{
    public function index()
    {
        $data =[
            "ternak"=>ProfilKambing::count(),
            "penjualan"=>PenjualanTernakKambing::count(),
        ];
        return view('peternak.dashboard',compact('data'));
    }
}
