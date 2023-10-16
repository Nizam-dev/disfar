<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProfilKambing;
use App\Models\RiwayatReproduksiKambing;
use App\Models\RiwayatKesehatanKambing;

class TernakController extends Controller
{
    public function index()
    {
        $data = ProfilKambing::where('user_id',auth()->user()->id)->get();
        if(auth()->user()->role == 'admin'){
            $data = ProfilKambing::with('user')->get();
        }
        return view('peternak.ternak',compact('data'));
    }

    public function tambah()
    {
        return view('peternak.ternak-add');
    }

    public function tambah_profil_kambing(Request $request)
    {
            $data = $request->validate([
                'jenis_kambing'=>'required',
                'umur'=>'required',
                'kesehatan'=>'required',
                'nomor_ternak'=>'required',
                'jenis_kelamin_ternak'=>'required',
                'jenis_ternak'=>'required',
                'jumlah_ternak'=>'required',
            ]);

            $data['user_id']=auth()->user()->id;
            ProfilKambing::create($data);
            return redirect(auth()->user()->role == 'admin' ? 'admin/ternak' : 'peternak/ternak')
            ->with('success','Profil Kambing Berhasil Ditambahkan');
    }
    public function edit_profil_kambing($id){
        $data = ProfilKambing::findOrFail($id);
        return view('peternak.ternak-edit',compact('data'));
    }
    public function update_profil_kambing($id,Request $request)
    {
        $data = $request->validate([
            'jenis_kambing'=>'required',
            'umur'=>'required',
            'kesehatan'=>'required',
            'nomor_ternak'=>'required',
            'jenis_kelamin_ternak'=>'required',
            'jenis_ternak'=>'required',
            'jumlah_ternak'=>'required',
        ]);

        ProfilKambing::findOrFail($id)->update($data);
        return redirect(auth()->user()->role == 'admin' ? 'admin/ternak' : 'peternak/ternak')
        ->with('success','Profil Kambing Berhasil Diubah');
    }

    public function detail_ternak($id)
    {
        $data = ProfilKambing::with(['riwayat_kesehatan','riwayat_reproduksi'])->findOrFail($id);
        return view('peternak.ternak-detail',compact('data'));
    }

    public function hapus_profil_kambing($id)
    {
        ProfilKambing::findOrFail($id)->delete();
        return redirect()->back()->with('success','Ternak Berhasil Dihapus');
    }

    //riwayat kesehatan kambing

    public function riwayat_reproduksi_kambing($id){
        $user_id = ProfilKambing::findOrFail($id)->user_id;
        $profilkambing = ProfilKambing::findOrFail($id);
        $data = RiwayatReproduksiKambing::where('profil_kambing_id',$id)->get();
       
        return view('peternak.ternak-riwayat-reproduksi',compact('data','id','user_id','profilkambing'));
    }

    public function tambah_riwayat_reproduksi_kambing($id, Request $request){
        $data = $request->validate([
            'melahirkan'=>'required',
            'sehat_aman'=>'required',
            'kawin_ternak'=>'required',
            'tanggal_kawin'=>'required',
            'tanggal_melahirkan'=>'required',
        ]);

        $data['profil_kambing_id'] = $id;
        RiwayatReproduksiKambing::create($data);
        return redirect()->back()->with('success','Riwayat Reproduksi Berhasil Ditambahkan');
    }

    public function edit_riwayat_reproduksi_kambing($id, Request $request){
        $data = $request->validate([
            'melahirkan'=>'required',
            'sehat_aman'=>'required',
            'kawin_ternak'=>'required',
            'tanggal_kawin'=>'required',
            'tanggal_melahirkan'=>'required',
        ]);

        RiwayatReproduksiKambing::where('id',$id)->update($data);
        return redirect()->back()->with('success','Riwayat Reproduksi Berhasil Diubah');
    }

    public function hapus_riwayat_reproduksi_kambing($id)
    {
        RiwayatReproduksiKambing::findOrFail($id)->delete();
        return redirect()->back()->with('success','Riwayat Reproduksi Berhasil Dihapus');
    }


    //riwayat reproduksi kambing

    public function riwayat_kesehatan_kambing($id){
        $user_id = ProfilKambing::findOrFail($id)->user_id;
        $profilkambing = ProfilKambing::findOrFail($id);
        $data = RiwayatKesehatanKambing::where('profil_kambing_id',$id)->get();
        // return $profilkambing;
        return view('peternak.ternak-riwayat-kesehatan',compact('data','id','user_id','profilkambing'));
    }

    public function tambah_riwayat_kesehatan_kambing($id, Request $request){
        $data = $request->validate([
            'penyakit_sering_diderita'=>'required',
            'obat_digunakan'=>'required',
            'penyakit_pernah_diderita'=>'required',
            'sering_sakit'=>'required',
            'penanganan'=>'required',
        ]);

        $data['profil_kambing_id'] = $id;
        RiwayatKesehatanKambing::create($data);
        return redirect()->back()->with('success','Riwayat Kesehatan Berhasil Ditambahkan');
    }

    public function edit_riwayat_kesehatan_kambing($id, Request $request){
        $data = $request->validate([
            'penyakit_sering_diderita'=>'required',
            'obat_digunakan'=>'required',
            'penyakit_pernah_diderita'=>'required',
            'sering_sakit'=>'required',
            'penanganan'=>'required',
        ]);

        RiwayatKesehatanKambing::where('id',$id)->update($data);
        return redirect()->back()->with('success','Riwayat Kesehatan Berhasil Diubah');
    }

    public function hapus_riwayat_kesehatan_kambing($id)
    {
        RiwayatKesehatanKambing::findOrFail($id)->delete();
        return redirect()->back()->with('success','Riwayat Kesehatan Berhasil Dihapus');
    }





    
}
