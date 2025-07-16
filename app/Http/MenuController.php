<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Récupérer tous les plats
        $plats = Plat::all();

        // Séparer les 4 premiers pour la colonne de droite
        $platsDroite = $plats->take(4);

        // Le reste va à gauche
        $platsGauche = $plats->skip(4);

        // Envoyer à la vue menu.blade.php
        return view('client.menu', compact('platsGauche', 'platsDroite'));
    }
}
