<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'adresse_rue',
        'adresse_ville',
        'adresse_code_postal',
        'adresse_etage',
        'nombre_chambres',
        'capacite',
        'superficie'
    ];
}
