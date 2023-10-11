<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use App\Models\PenjualanTernakKambing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenjualanTernakController extends Controller
{
    // 
    public function tambah(Request $request){
        $namaFiles = '';
        //
        // $this->validate($request, [
        //     // check validtion for image or file
        //           'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //       ]);


            $tujuan_upload = public_path('images/kambing');
            $file = $request->file('foto_kambing');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            // $req['']=$namaFile;
            $namaFiles = $namaFile;
      

         PenjualanTernakKambing::create([
            "jenis"=>$request->jenis,
            "umur"=>$request->umur, 
            "kelebihan_kekurangan"=>$request->kelebihan_kekurangan, 
            "kisaran_harga_jual"=>$request->kisaran_harga_jual, 
            "no_wa"=>$request->no_wa, 
            "lampiran_foto" => $namaFiles

        ]);
        return redirect()->back()->with('message', 'Data Penjualan Ternak Kambing  Berhasil Ditambahkan');
    }
}
