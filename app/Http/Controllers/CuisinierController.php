<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuisinierController extends Controller
{
    public function preparations()
    {
        return view('cuisinier.preparations');
    }
}
