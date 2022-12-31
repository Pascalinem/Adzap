

    <div class="card">
        <h3 class="mt-6 text-xl pl-4 card-header bg-[#B4A4B5] rounded text-[#6D257D] font-bold mb-4">Recherche logement selon disponibilités</h3>
    <form class ="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 card-body" wire:submit.prevent="submit">
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="date_debut">Date Arrivée</label>
            <input type="date" wire:model.debounce.300ms="date_debut"
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
        value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_debut') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        

        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="date_fin">Date Départ</label>
            <input type="date" wire:model.debounce.300ms="date_fin"
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
        value="{{ Carbon\Carbon::parse()->format('Y-m-d') }}">
            @error('date_fin') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
              
        <button type="submit" class="bg-[#6D257D] hover:bg-[#EA7869]  text-white font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow" wire:click="setParams()">C'est parti !</button>
    </form>
    </div>

