<?php

namespace App\Http\Livewire\Reservation;

use App\Models\Logement;
use App\Models\Reservation;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ReservationsDatatable extends LivewireDatatable
{
    public function builder()
    {
        return Reservation::query()->leftjoin('logements','reservations.logement_id','logements.id')->leftjoin('users','users.id','reservations.user_id');
    }

    public function columns()
    {
        return [ 
            Column::name('logement.nom')
        ->label('Logement')
        ->filterable($this->logementsFilter),

        Column::name('user.name')       
        ->label('Client')
        ->filterable(),

        DateColumn::name('date_debut')
            ->label('Arrivée')
            ->sortable()
            ->filterable(),

        DateColumn::name('date_Fin')
            ->label('Départ')
            ->filterable(),

        Column::name('statut')       
            ->label('Statut')
            ->filterable(),

        Column::callback(['id'], function ($id) {
            return view('table-actions', ['id' => $id]);
        })->unsortable()
        ];
    }

    public function getLogementsFilterProperty(){
        $sortedLogements = Logement::pluck('nom')->values()->all();
        return $sortedLogements;
    }
}