<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EdukasiTernak;
class EdukasiController extends Controller
{
    public function index()
    {
        $data = EdukasiTernak::all();
        return view('guest.edukasi',compact('data'));
    }
    public function detail($id)
    {
        $data = EdukasiTernak::findOrFail($id);
        return view('guest.edukasi-detail',compact('data'));
    }
}
