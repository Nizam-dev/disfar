<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    //
    public function index(){
        $akun = User::where('role','peternak')->orderBy('id','desc')->get();
        return view('admin.verifikasi_akun',compact('akun'));
    }

    public function edit(){

    }

    public function update(){

    }

    
}
