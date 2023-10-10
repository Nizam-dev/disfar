<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatReproduksiKambing extends Model
{
    use HasFactory;

    protected $fillable = [
        'profil_kambing_id',
           'melahirkan',
            'sehat_aman',
            'kawin_ternak',
            'tanggal_kawin',
            'tanggal_melahirkan'

    ];
}
