

    <div class=" mx-auto w-1/2 max-w-xs">
        <h3 class="mt-6 text-xl">Nouvelle réservation</h3>
    <form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="date_debut">Date Arrivée</label>
            <input type="date" wire:model.debounce.300ms=""
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
        value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_debut') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        

        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="date_fin">Date Départ</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="date_fin" placeholder="Entrer la rue" wire:model="date_fin">
            @error('date_fin') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
              
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder la réservation</button>
    </form>
    </div>

