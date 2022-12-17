

    <div class=" mx-auto w-full">
        <h3 class="mt-6 text-xl">Nouvelle réservation</h3>
    <form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        
        <div class="form-group">
            <label class="text-gray-700 text-sm font-bold md:w-1/8" for="date_debut">Date Arrivée</label>
            <input type="date" 
            wire:model.debounce.300ms="date_debut"
            @if($date_fin)
                wire:change="setParams"
            @endif
            class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md md:w-2/8"
            value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_debut') <span class="text-danger">{{ $message }}</span> @enderror

       
            <label class="text-gray-700 text-sm font-bold md:w-1/8" for="date_fin">Date Départ</label>
            <input type="date" 
            wire:model.debounce.300ms="date_fin"
            wire:change="setParams"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md md:w-2/8"
            value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_fin') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <div class="card-body">
            @livewire('logement.liste-logement')
          </div>

              
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder la réservation</button>
    </form>
    </div>

