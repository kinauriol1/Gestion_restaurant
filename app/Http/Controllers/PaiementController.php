<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    use App\Models\Paiement;
use Illuminate\Http\Request;

public function store(Request $request)
{
    $request->validate([
        'operateur' => 'required|string',
        'telephone' => 'required|string|min:8',
        'montant' => 'required|numeric|min:100',
    ]);

    Paiement::create($request->all());

    return back()->with('success', '✅ Paiement enregistré avec succès !');
}

}
