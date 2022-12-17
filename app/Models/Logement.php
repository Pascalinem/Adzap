<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'description',
        'adresse_rue',
        'adresse_etage',
        'adresse_ville',
        'adresse_code_postal',
        'nombre_chambres',
        'capacite',
        'superficie',
        'tarif'
    ];

    public function reservations()
    {
        return $this->hasMany(\App\Models\Reservation::class, 'logement_id', 'id');
    }
}
