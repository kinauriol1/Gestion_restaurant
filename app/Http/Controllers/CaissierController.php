<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaissierController extends Controller
{
    public function paiements()
    {
        return view('caissier.paiements');
    }
}
