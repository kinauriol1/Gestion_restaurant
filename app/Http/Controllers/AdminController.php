<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class admincontroller extends Controller
{
    public function dashboard()
    {
        $commandes = Commande::latest()->get();
        return view('admin.dashboard', compact('commandes'));
    }
}
