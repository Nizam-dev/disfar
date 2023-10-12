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

    public function edit($id){
        $akun = User::where('id',$id)->first();
        return view('admin.verifikasi_akun-edit',compact('akun'));

    }

    public function update(Request $request,$id){
        $data = $request->validate([
            'status_akun'=>'required',
        ]);

        User::findOrFail($id)->update($data);
        return redirect('admin/verifikasi_akun')
        ->with('success','Status Akun Berhasil Diubah');

    }

    
}
