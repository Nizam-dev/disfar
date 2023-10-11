<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanTernakKambing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
            'umur',
            'jenis',
            'kelebihan_kekurangan',
            'kisaran_harga_jual',
            'no_wa',
            'lampiran_foto',

    ];

}
