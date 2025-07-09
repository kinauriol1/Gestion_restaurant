<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function menu()
    {
        return view('client.menu');
    }

    public function avis()
    {
        return view('client.avis');
    }
}
