<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreurController extends Controller
{
     public function livraisons()
    {
        return view('livreur.livraisons');
    }
}
