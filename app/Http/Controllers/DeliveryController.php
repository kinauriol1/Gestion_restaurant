<?php

public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'telephone' => 'required|string|min:8|max:20',
        'email' => 'nullable|email',
        'ville' => 'required|string|max:100',
        'quartier' => 'required|string|max:100',
    ]);

    $delivery = Delivery::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'ville' => $request->ville,
        'quartier' => $request->quartier,
        'heure_livraison' => now()->addMinutes(45), // exemple: livraison prévue dans 45 minutes
    ]);

    return view('client.livraison', [
        'delivery' => $delivery,
        'success' => '✅ Votre demande de livraison a été prise en compte !',
    ]);
}
