<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Plat;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    // ✅ Affiche la page de formulaire général
    public function form()
    {
         $plats = Plat::all();
        return view('client.commande_form'); compact('plats');
    }
       
public function dashboard()
{
    $commandes = Commande::orderBy('created_at', 'desc')->get();
    return view('admin.commandes', compact('commandes'));
}

    
    // ✅ Enregistre la commande
    public function store(Request $request)
    {
        $request->validate([
            'nom_client' => 'required|string|max:255',
            'plat' => 'required|string|max:255',
            'quantite' => 'required|integer|min:1',
            'prix_total' => 'required|numeric|min:0',
        ]);

        // Si tu veux calculer automatiquement le prix total (optionnel)
        $platChoisi = Plat::where('nom', $request->plat)->first();
        if ($platChoisi) {
            $prix_total = $platChoisi->prix * $request->quantite;
        } else {
            $prix_total = $request->prix_total; // ou 0 par défaut
        }

        $commande = Commande::create([
            'nom_client' => $request->nom_client,
            'plat' => $request->plat,
            'quantite' => $request->quantite,
            'prix_total' => $prix_total,
        ]);
      
        return view('client.confirmation', compact('commande'));

    }
}
