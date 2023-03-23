

    <div class=" mx-auto w-full">
        <h3 class="ml-8 mt-6 mb-8 text-2xl text-[#6D257D] font-bold ">Nouvelle réservation</h3>
        <p class="ml-8"> <i>Indiquez les <span class="underline">dates de début</span> et de <span class="underline">fin de séjour</span> souhaitées pour voir les <span class="font-bold underline">appartements disponibles.</span> <br> Cliquez ensuite sur le bouton <b> Selectionner </b> un appartement pour le reserver.</i></p>
    <form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        
        <div class="inline-block ml-8 form-group">
            <label class="text-gray-700 text-sm font-bold md:w-1/8" for="date_debut">Date Arrivée :  </label>
            <input type="date" 
            wire:model.debounce.300ms="date_debut"
            @if($date_fin)
                wire:change="setParams"
            @endif
            class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md md:w-2/8"
            value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_debut') <span class="text-danger">{{ $message }}</span> @enderror

       
            <label class=" text-gray-700 ml-8 text-sm font-bold md:w-1/8" for="date_fin">Date de fin de séjour :  </label>
            <input type="date" 
            wire:model.debounce.300ms="date_fin"
            wire:change="setParams"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md md:w-2/8"
            value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_fin') <span class="text-danger">{{ $message }}</span> @enderror

            <label class=" text-gray-700 ml-8 text-sm font-bold md:w-1/8" for="date_fin">Nombre de Personnes:  </label>
            <input type="number" 
            wire:model="nombre_personnes"
                wire:change="setParams"
            class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md md:w-2/8">
            @error('nombre_personnes') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        @if($date_debut && $date_fin && $nombre_personnes && $logement_id)
        <div class="inline-block ml-8 my-8 text-[#6D257D] font-bold ">
            Durée Séjour :  {{ $this->nbjours }}  jours 
           <span class="ml-8"> Prix total = {{ $this->prix_total }}  € soit {{ $this->prix_cfa }} F CFA</span>
        </div>
        @endif
       <!-- <div>
            @if ( $date_debut && $date_fin && $nombre_personnes)
                <p class=" ml-8 font-bold text-[#EA7869]">Veuillez selectionner un appartement pour connaître le prix de votre séjour et pouvoir finaliser votre reservation.</p>
            @endif
        </div>-->
        @if($date_debut && $date_fin && $nombre_personnes && $logement_id)
        <button type="submit" class="inline-block bg-[#EA7869] text-[#7E201F] hover:bg-green-400 text-gray-800 text-xl ml-8 font-semibold my-8 py-4 px-4 border border-gray-400 rounded shadow">
            Sauvegarder le logement selectionné</button>
        @endif
        <div class="mt-4 ml-8 card-body">
            @livewire('logement.liste-logement')
        </div>
        
     
        
        
    </form>
    </div>

