<?php

namespace App\Http\Livewire;

use App\Models\Logement;
use Livewire\Component;


class NouveauLogementForm extends Component
{
    public $nom;
    public $adresse_rue;
    public $adresse_etage;
    public $adresse_ville;
    public $adresse_code_postal;
    public $nombre_chambres;
    public $capacite;
    public $superficie;

    public function submit()
    {
        $validatedData = $this->validate([
            'nom' => 'required|min:3',
            'adresse_rue' => 'required|min:3',
            'adresse_etage' => 'required',
            'adresse_ville' => 'required',
            'adresse_code_postal' => 'required',
            'nombre_chambres' => 'required',
            'capacite' => 'required',
            'superficie' => 'required',
        ]);
   
        Logement::create($validatedData);
   
        return redirect()->to('/logement/liste');
    }
    public function render()
    {
        return view('livewire.nouveau-logement-form');
    }
}
