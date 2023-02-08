<?php

namespace App\Http\Livewire\Reservation;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Logement;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class NouvelleReservationForm extends Component
{
    
    
    public $date_debut;
    public $date_fin;
    public $logement;
    public $logement_id;
    public $user_id;
    public $nbjours=0;
    public $nombre_personnes=0;
    public $statut = [
        '1'=>'En attente de validation',
        '2'=> "Validée",
        '3' => "Annulée",
      
    ];
    public $prix_total = 0;
    public $prix_cfa=0;
    protected $listeners = ['logementSelected'=> 'logementSelected'];

    public function mount(){
        
        $this->user_id = Auth::user()->id;
        $this->statut = "En attente de validation";

    }

    public function submit()
    {
          
        
        $validatedData = $this->validate([
            'date_debut' => 'required|date|after:yesterday',
            'date_fin' => 'required|date|after:date_debut',
            'logement_id' => 'required',
            'user_id' => 'required',
            'statut' => '',
            'nombre_personnes'=>'required|numeric',
            'prix_total'=>'',
            
        ]);


        

        $reservation=Reservation::create($validatedData);
        return redirect()->to('/reservation/'.$reservation->id);
    }
    
    public function setParams(){
        
        $this->emit('getParams', $this->date_debut, $this->date_fin, $this->nombre_personnes);
        if($this->date_fin && $this->date_debut){
            $this->nbjours=date_diff(date_create($this->date_fin),date_create($this->date_debut)) ;
            $this->nbjours= ($this->nbjours)->format('%a');
        }
        else{
            $this->nbjours= 0;
        }
        

        if($this->logement){
          
            $this->prix_total= $this->nbjours * $this->logement->tarif;
            if($this->nbjours<8){
                $this->prix_total = $this->prix_total;
            }
            else if($this->nbjours<15 ){
                $this->prix_total = $this->prix_total*0.95;
            }
            else if ($this->nbjours<31){
                $this->prix_total = $this->prix_total*0.93;
            }
            else{
                $this->prix_total =$this->prix_total*0.9;
            }
            $this->prix_cfa= round(655.957*$this->prix_total, 0);
        }
        else{
        $this->prix_total= 0;
        $this->prix_cfa=0;
        }



        
    }

    public function logementSelected($logement_id){
        $logement = Logement::find($logement_id);
        $this->logement=$logement;
        $this->logement_id=$logement->id;
        $this->setParams();
            
    }
    
    
    public function render()
    {
        return view('livewire.reservation.nouvelle-reservation-form');
    }
}
