<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function show($id)
    {
        $plat = Plat::findOrFail($id); // Trouve le plat ou retourne une 404
        return view('client.commande', compact('plat'));
    }
}

