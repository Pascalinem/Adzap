<?php

namespace App\Http\Livewire\Logement;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Logement;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class NouvelleReservationLogement extends Component
{
    
    
    public $date_debut;
    public $date_fin;
    public $logement;
    public $logement_id;
    public $user_id;
    public $nbjours=0;
    public $nombre_personnes=0;
    public $prix_cfa=0.0;
    public $statut = [
        '1'=>'En attente de validation',
        '2' => "En attente de paiement",
        '3' => "Validée",
        '4' => 'paiement reçu',
        '5' => "Annulée",
        '6' => "clôturée",
    ];
    public $prix_total = 0;

    public function mount(){
        
        $this->logement = Logement::find($this->logement_id);
        $this->statut = "En attente de validation";

    }

    public function submit(){}
    
    
    public function setParams(){
        
        $this->emit('getParams', $this->date_debut, $this->date_fin);
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
            $this->prix_cfa= round(655.957*$this->prix_total,0);
            
        }
        else {
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
        return view('livewire.logement.nouvelle-reservation-logement');
    }
}
