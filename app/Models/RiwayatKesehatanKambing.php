<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKesehatanKambing extends Model
{
    use HasFactory;
    protected $fillable = [
        'profil_kambing_id',
        'penyakit_sering_diderita',
        'obat_digunakan',
        'penyakit_pernah_diderita',
       'sering_sakit',
        'penanganan',
    ];
}
