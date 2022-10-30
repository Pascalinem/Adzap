<?php

namespace App\Http\Livewire\Logement;

use Livewire\Component;
use App\Models\Logement;

class ListeLogement extends Component
{
    public $logements;


    public function mount()
    {
        $this->logements = Logement::all();
    }
    
    public function render()
    {
        return view('livewire.logement.liste-logement');
    }
}
