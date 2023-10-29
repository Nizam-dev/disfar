<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenjualanTernakKambing;
use Carbon\Carbon;


class PenjualanController extends Controller
{
    public function index()
    {
        $data = PenjualanTernakKambing::where('user_id',auth()->user()->id)->get();
        if(auth()->user()->role == 'admin'){
            $data = PenjualanTernakKambing::with('user')
            ->get();
        }
        return view('peternak.penjualan',compact('data'));
    }
    public function tambah()
    {
        return view('peternak.penjualan-add');
    }

    public function tambah_penjualan(Request $request)
    {
        $data = $request->validate([
            'umur'=>'required',
            'jenis'=>'required',
            'kelebihan_kekurangan'=>'required',
            'kisaran_harga_jual'=>'required',
            'no_wa'=>'required',
            'lampiran_foto'=>'required',
        ]);
        
        $data['user_id'] = auth()->user()->id; 
        $data['terjual'] = 'belum'; 

        if($request->hasFile('lampiran_foto')){
            $tujuan_upload = public_path('images/kambing');
            $file = $request->file('lampiran_foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['lampiran_foto'] = $namaFile;
        }

        PenjualanTernakKambing::create($data);
        return redirect(auth()->user()->role == 'admin' ? 'admin/penjualan' : 'peternak/penjualan')
        ->with('success','Penjualan Kambing Berhasil Ditambahkan');
       
    }

    public function edit($id)
    {
        $data = PenjualanTernakKambing::findOrFail($id);
        return view('peternak.penjualan-edit',compact('data'));
    }

    public function edit_penjualan($id, Request $request)
    {
        $data = $request->validate([
            'umur'=>'required',
            'jenis'=>'required',
            'kelebihan_kekurangan'=>'required',
            'kisaran_harga_jual'=>'required',
            'no_wa'=>'required',
            'terjual'=>'required',
        ]);

        if($request->hasFile('lampiran_foto')){
            $tujuan_upload = public_path('images/kambing');
            $file = $request->file('lampiran_foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['lampiran_foto'] = $namaFile;
        }

        PenjualanTernakKambing::findOrFail($id)->update($data);
        return redirect(auth()->user()->role == 'admin' ? 'admin/penjualan' : 'peternak/penjualan')
        ->with('success','Penjualan Kambing Berhasil Diubah');
    }

    public function hapus($id)
    {
        PenjualanTernakKambing::findOrFail($id)->delete();
        return redirect()->back()->with('success','Penjualan Kambing Berhasil DiHapus');
    }

}
