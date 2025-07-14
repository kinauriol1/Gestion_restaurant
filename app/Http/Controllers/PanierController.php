<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function ajouter($id)
    {
        $plat = Plat::findOrFail($id);
        $panier = session()->get('panier', []);

        if (isset($panier[$id])) {
            $panier[$id]['quantite']++;
        } else {
            $panier[$id] = [
                "nom" => $plat->nom,
                "prix" => $plat->prix,
                "image" => $plat->image,
                "quantite" => 1
            ];
        }

        session()->put('panier', $panier);

        return redirect()->route('menu.client')->with('success', 'Plat ajouté au panier');
    }

    public function afficher()
    {
        $panier = session()->get('panier', []);
        return view('client.panier', compact('panier'));
    }
}

