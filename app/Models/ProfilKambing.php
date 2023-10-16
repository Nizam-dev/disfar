<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilKambing extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_kambing',
            'umur',
            'kesehatan',
            'user_id','nomor_ternak','jenis_kelamin_ternak','jenis_ternak','jumlah_ternak'

    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function riwayat_kesehatan()
    {
        return $this->hasMany(RiwayatKesehatanKambing::class);
    }

    public function riwayat_reproduksi()
    {
        return $this->hasMany(RiwayatReproduksiKambing::class);
    }

    public function delete()
    {
        $this->riwayat_kesehatan()->delete();
        $this->riwayat_reproduksi()->delete();
        return parent::delete();
    }

}
