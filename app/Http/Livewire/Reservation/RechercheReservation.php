<?php

namespace App\Http\Livewire\Reservation;

use Livewire\Component;

class RechercheReservation extends Component
{
    public $date_debut;
    public $date_fin;
    public $nombre_personnes;

    public function submit()
    {
        $validatedData = $this->validate([
            'date_debut' => 'required',
            'date_fin' => 'required',
            'nombre_personnes'=>'required|numeric',
            
        ]);
    }
    
    public function setParams(){
        
        $this->emit('getParams', $this->date_debut, $this->date_fin,$this->nombre_personnes);
    }

    public function render()
    {
        
        return view('livewire.reservation.recherche-reservation');
    }
}
