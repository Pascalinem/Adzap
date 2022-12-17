<?php

namespace App\Http\Livewire\Utilisateur;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UtilisateursDatatable extends LivewireDatatable
{
    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [ 
            Column::name('name')
        ->label('Nom')
        ->filterable(),

        Column::name('email')
        ->label('Email')
        ->filterable(),

        Column::name('role_id')
        ->label('Role')
        ->filterable(),
        
        ];
    }
}