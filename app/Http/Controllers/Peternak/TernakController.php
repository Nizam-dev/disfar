<?php

namespace App\Http\Controllers\Peternak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function index()
    {
        return view('peternak.ternak');
    }
}