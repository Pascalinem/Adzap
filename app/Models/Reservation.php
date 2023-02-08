<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'logement_id',
        'user_id',
        'date_debut',
        'date_fin',
        'statut_id',
        'nombre_personnes',
        'prix_total',
        'prix_cfa'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logement()
    {
        return $this->belongsTo(Logement::class);
    }

    public function statut()
    {
        return $this->belongsTo(StatutReservation::class);
    }
    
}
