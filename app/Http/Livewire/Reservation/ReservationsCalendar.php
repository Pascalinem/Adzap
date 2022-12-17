<?php

namespace App\Http\Livewire\Reservation;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Reservation;
use App\Models\Event;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;


class ReservationsCalendar extends Component
{
    public $events = [];
    public function render()
    {
        $reservations = Reservation::all();
        foreach( $reservations as $reservation){
            $color = "blue";
            $event  = [];
            $event['id'] = $reservation->id;
            $event['title'] = "Logement ".$reservation->logement_id. " - ". $reservation->user->name;
            $event['start'] = $reservation->date_debut;
            $event['end'] = $reservation->date_fin;
            $event['url'] = '/reservation/'.$reservation->id;
            switch($reservation->statut) {
                case 'Reservé':
                    $color = "green";
                break;
                case 'En attente de paiement':
                    $color = "orange";
                break;
                case 'Annulé':
                    $color = "red";
                break;
            }

            $event['backgroundColor'] = $color;
            array_push($this->events,$event);

        }
        //dd($this->events);  
        $this->events = json_encode($this->events);
        //dd($this->events);
        return view('livewire.reservation.reservations-calendar');
    }
   
}
