<?php

namespace App\Http\Livewire\Logement;

use Livewire\Component;
use App\Models\Logement;
use App\Models\Reservation;

class ListeLogement extends Component
{
    public $logements;
    protected $listeners = ['getParams' => 'submit'];
    public $date_debut;
    public $date_fin;
    
   
    
    public function submit($date_debut,$date_fin)
    {
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
    }
    public function render()
    {
        if($this->date_debut != null){
            
            $this->logements = Logement::whereNotIn('id',Reservation::select('logement_id')
        ->where(function ($query) {
            $query->where([['date_debut','<=',$this->date_debut],
                ['date_fin','>',$this->date_debut]])
                ->orWhere([['date_debut','<',$this->date_fin],['date_fin','>',$this->date_fin]])
                ;
            }))->get();
        }
        else
        {   
                 
            $this->logements = Logement::all();
            
        }
                
    

        return view('livewire.logement.liste-logement');
    }
}
