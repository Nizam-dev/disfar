<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use App\Models\EdukasiTernak;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EdukasiTernakController extends Controller
{
    //
    public function index()
    {
        $data = EdukasiTernak::get();
        if(auth()->user()->role=='admin'){
            $data = EdukasiTernak::get();
        }
     
        return view('peternak.edukasi',compact('data'));
    }
    public function tambah()
    {
        return view('peternak.edukasi-add');
    }

    public function tambah_edukasi(Request $request)
    {
        $data = $request->validate([
            'jenis_edukasi'=>'required',
            'isi_edukasi'=>'required',
            'foto_edukasi'=>'required',
        ]);
        
        $data['user_id'] = auth()->user()->id; 

        if($request->hasFile('foto_edukasi')){
            $tujuan_upload = public_path('images/kambing');
            $file = $request->file('foto_edukasi');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto_edukasi'] = $namaFile;
        }

        EdukasiTernak::create($data);
        return redirect(auth()->user()->role == 'admin' ? 'admin/kelolaedukasi' : 'peternak/kelolaedukasi')
        ->with('success','Edukasi Ternak Berhasil Ditambahkan');
       
    }

    public function edit($id)
    {
        $data = EdukasiTernak::findOrFail($id);
        return view('peternak.edukasi-edit',compact('data'));
    }

    public function edit_edukasi($id, Request $request)
    {
        $data = $request->validate([
            'jenis_edukasi'=>'required',
            'isi_edukasi'=>'required',
            'foto_edukasi'=>'required',
        ]);

        if($request->hasFile('foto_edukasi')){
            $tujuan_upload = public_path('images/kambing');
            $file = $request->file('foto_edukasi');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto_edukasi'] = $namaFile;
        }

        EdukasiTernak::findOrFail($id)->update($data);
        return redirect(auth()->user()->role == 'admin' ? 'admin/kelolaedukasi' : 'peternak/kelolaedukasi')
        ->with('success','Edukasi Ternak Berhasil Diubah');
    }

    public function hapus($id)
    {
        EdukasiTernak::findOrFail($id)->delete();
        return redirect()->back()->with('success','Edukasi Ternak Berhasil DiHapus');
    }

}
