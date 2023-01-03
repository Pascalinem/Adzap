<?php

namespace App\Http\Livewire;

use App\Models\Logement;
use Livewire\Component;
use Livewire\WithFileUploads;


class NouveauLogementForm extends Component
{
    
    use WithFileUploads;
    
    public $nom;
    public $description;
    public $adresse_rue;
    public $adresse_etage;
    public $adresse_ville;
    public $adresse_code_postal;
    public $nombre_chambres;
    public $capacite;
    public $superficie;
    public $tarif;
    public $living;
    public $sdb;
    public $cuisine;
    public $autre_photo;
    

    public function submit()
    {
        

        
        
        
    
        $validatedData = $this->validate([
            'nom' => 'required|min:3',
            'description'=> 'required',
            'adresse_rue' => 'required|min:3',
            'adresse_etage' => 'required',
            'adresse_ville' => 'required',
            'adresse_code_postal' => 'required',
            'nombre_chambres' => 'required',
            'capacite' => 'required',
            'superficie' => 'required',
            'tarif' =>'required',
            'living'=>'',
            'sdb'=>'',
            'cuisine'=>'',
            'autre_photo'=>'',
            
        ]);
        

   
        Logement::create($validatedData);
        $validatedData['living'] = $this->living->store($this->nom, 'public');
        $validatedData['sdb'] = $this->sdb->store($this->nom, 'public');
        $validatedData['cuisine'] = $this->cuisine->store($this->nom, 'public');
        $validatedData['autre_photo'] = $this->autre_photo->store($this->nom, 'public');
   
        return redirect()->to('/logement/liste');
    }
    public function render()
    {
        return view('livewire.nouveau-logement-form');
    }
}
