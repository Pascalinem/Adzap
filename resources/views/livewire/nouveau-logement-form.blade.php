

    <div class=" mx-auto w-1/2 max-w-xs">
        <h3 class="mt-6 text-xl">Ajouter un logement </h3>
    <form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="nom">Nom</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom" placeholder="Entrer le nom" wire:model="nom">
            @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-rue">Rue</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-rue" placeholder="Entrer la rue" wire:model="adresse_rue">
            @error('adresse_rue') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-etage">Etage</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-etage" placeholder="Entrer l'étage" wire:model="adresse_etage">
            @error('adresse_etage') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-ville">Ville</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-ville" placeholder="Entrer la ville" wire:model="adresse_ville">
            @error('adresse_ville') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-code-postal">Code Postal</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal" placeholder="Entrer le code postal" 
            wire:model="adresse_code_postal">
            @error('adresse_code_postal') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="nombre-chambres">Nombre de Chambres</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nombre-chambres" placeholder="Entrer le nombre de chambres" 
            wire:model="nombre_chambres">
            @error('nombre_chambres') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="capacite">Couchages</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="capacite" placeholder="Entrer le nombre de personnes" 
            wire:model="capacite">
            @error('capacite') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="superficie">Superficie</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="superficie" placeholder="Entrer la superficie" 
            wire:model="superficie">
            @error('superficie') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="tarif">Tarif</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="tarif" placeholder="Entrer le tarif par nuit" 
            wire:model="tarif">
            @error('tarif') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <textarea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  class="form-control" id="description" placeholder="Entrer la description" wire:model="description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <button type="submit" class="bg-white hover:bg-green-400 text-gray-800 font-semibold mt-8 py-4 px-4 border border-gray-400 rounded shadow">Sauvegarder le logement</button>
    </form>
    </div>

