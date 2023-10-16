<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdukasiTernak extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_edukasi',
        'isi_edukasi',
       'foto_edukasi'
    ];
    
}
