<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'nom_client',
        'plat',
        'quantite',
        'prix_total',
    ];
 
}
