<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plat; // ← N'oublie pas d'importer le modèle

class ClientController extends Controller
{
    public function menu()
    {
         $plats = \App\Models\Plat::all();

    $milieu = ceil($plats->count() / 2);
    $platsGauche = $plats->slice(0, $milieu);
    $platsDroite = $plats->slice($milieu);

    return view('client.menu', compact('platsGauche', 'platsDroite'));
    }

    public function avis()
    {
        return view('client.avis');
    }
}
