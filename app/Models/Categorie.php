<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    // Champs remplissables (très important)
    protected $fillable = [
        'nom',
    ];

    // Relation : une catégorie a plusieurs plats
    public function plats()
    {
        return $this->hasMany(Plat::class);
    }
}

