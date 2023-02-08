<?php

namespace App\Http\Livewire\Reservation;

use App\Models\Logement;
use App\Models\Reservation;
use App\Models\StatutReservation;
use Illuminate\Support\Facades\View;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ReservationsDatatable extends LivewireDatatable
{
    public function builder()
    {
        return Reservation::query()
        ->leftjoin('logements','reservations.logement_id','logements.id')
        ->leftjoin('users','users.id','reservations.user_id')
        ->leftjoin('statut_reservations','statut_reservations.id','reservations.statut_id');
    }

    public function columns()
    {
        return [ 

        Column::name('id')
        ->label('N°')
        ->sortable()
        ->filterable()
        ->linkTo('reservation', 6),

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

        
        
        Column::callback(["reservations.id", "statut_reservations.id", "statut_reservations.nom"], function ($modelId, $valueId, $valueName) {
            return view('select-editable', [
                'rowId' => $modelId,
                'modelName' => "statut_reservation",
                'nullable' => false,
                'valueId' => $valueId, // myModel.user_id
                'options' => StatutReservation::All(), // [["id" => , "name" => , ....], ...]
                ]);
            })
            ->exportCallback(function ($modelId, $valueId, $valueName) {
                return $valueName;
            })
            /**->filterOn('statut_reservations.nom')
            ->filterable(StatutReservation::pluck('statut_reservations.nom'))**/
            ->label('Statut')
            ->searchable(),
        
        DateColumn::name('created_at')
        ->label('Créé')
        ->sortable()
        ->filterable(),

        DateColumn::name('updated_at')
        ->label('modifié')
        ->sortable()
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

    public function saveData($rowId, $modelName, $value)
    {
        if ($value === "")
            $value = null;         
        Reservation::where('id', $rowId)->update(["statut_id" => $value]);
    }
}