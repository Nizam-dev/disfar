<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function index()
    {
        return view('peternak.ternak');
    }
    public function tambah_profil_kambing(Request $request)
    {
      

    }
    public function update_profil_kambing(Request $request)
    {

    }
    public function hapus_profil_kambing($id)
    {

    }

    //riwayat kesehatan kambing

    public function tambah_riwayat_kesehatan_kambing(Request $request){

    }

    public function update_riwayat_kesehatan_kambing(Request $request){
        
    }
    
    public function hapus_riwayat_kesehatan_kambing($id){
        
    }


    //riwayat reproduksi kambing

    public function tambah_riwayat_reproduksi_kambing(Request $request){

    }
    public function update_riwayat_reproduksi_kambing(Request $request){

    }
    public function hapus_riwayat_reproduksi_kambing($id){

    }


    
}
