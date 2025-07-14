<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plat extends Model
{
    use HasFactory;

    // Champs que tu peux remplir (important pour créer/modifier depuis des formulaires ou factories)
    protected $fillable = [
        'nom',
        'description',
        'prix',
        'categorie_id',
        'disponible',
        'image',
    ];

    // Relation : un plat appartient à une catégorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}

