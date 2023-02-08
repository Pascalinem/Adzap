<?php

namespace App\Http\Livewire\Logement;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Reservation;
use App\Models\Event;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;


class LogementCalendar extends Component
{
    public $events = [];
    public $logement_id;
    public $date_debut;
    public $date_fin;
    //protected $listeners = ['getParams' => 'setDates'];

   // public function setDates($date_debut,$date_fin)
   //{
   //    $this->date_debut = $date_debut;
   //    $this->date_fin = $date_fin;
//
   //}

    public function render()

    {
        
        $reservations = Reservation::where('logement_id','=', $this->logement_id)->get();
        foreach( $reservations as $reservation){
            $color = "red";
            $event  = [];
            $event['id'] = $reservation->id;
            $event['title'] = "réservé";
            $event['start'] = $reservation->date_debut;
            $event['end'] = $reservation->date_fin;
           // $event['url'] = '/reservation/'.$reservation->id;
            

            $event['backgroundColor'] = $color;
            
            array_push($this->events,$event);

        }
            $new_event = [];
                $new_event['title'] = "votre séjour";
                $new_event['start'] = $this->date_debut;
                $new_event['end'] = $this->date_fin;
                $new_event['backgroundColor'] = "green";
                array_push($this->events,$new_event);
                
                
        //dd($this->events);  
        $this->events = json_encode($this->events);
        //dd($this->events);
        return view('livewire.logement.logement-calendar');
    }
   
}
