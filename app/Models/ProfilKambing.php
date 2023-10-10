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
            'user_id'

    ];
}
