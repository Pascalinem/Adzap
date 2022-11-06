<?php

namespace App\Http\Livewire\Reservation;

use Livewire\Component;

class RechercheReservation extends Component
{
    public $date_debut;
    public $date_fin;

    public function submit()
    {
        $validatedData = $this->validate([
            'date_debut' => 'required',
            'date_fin' => 'required',
            
        ]);
    }
    
    public function setParams(){
        
        $this->emit('getParams', $this->date_debut, $this->date_fin);
    }

    public function render()
    {
        
        return view('livewire.reservation.recherche-reservation');
    }
}
