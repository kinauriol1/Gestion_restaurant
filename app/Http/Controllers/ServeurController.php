<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServeurController extends Controller
{
    public function commandes()
    {
        return view('serveur.commandes');
    }
}
