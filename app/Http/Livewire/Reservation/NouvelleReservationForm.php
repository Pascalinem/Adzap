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
    public $logement_id;
    public $user_id;
    public $statut;
    //public $prix;
    protected $listeners = ['logementSelected'=> 'logementSelected'];

    public function mount(){
        
        $this->user_id = Auth::user()->id;
        $this->statut = "En attente de paiement";
    }

    public function submit()
    {
        //$logement = Logement::find($this->logement_id);
        //dd($this->logement_id);
        //$startDate = Carbon::parse($this->date_debut); $endDate = Carbon::parse($this->date_fin);
        //$nbJours = $endDate->diffInDays($startDate);
        //$this->prix = $nbJours * $logement->tarif;
        

        $validatedData = $this->validate([
            'date_debut' => 'required',
            'date_fin' => 'required',
            'logement_id' => 'required',
            'user_id' => 'required',
            'statut' => ''
            
        ]);
        

        $reservation=Reservation::create($validatedData);
        return redirect()->to('/reservation',['reservation_id' => $reservation->id]);
    }
    
    public function setParams(){
        
        $this->emit('getParams', $this->date_debut, $this->date_fin);
        
    }

    public function logementSelected($logement_id){
        $this->logement_id=$logement_id;
        
            
    }
    
    
    public function render()
    {
        return view('livewire.reservation.nouvelle-reservation-form');
    }
}
