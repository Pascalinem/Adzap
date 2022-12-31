

    <div class=" mx-auto w-1/2 max-w-xs">
        <h3 class="my-6 text-xl text-[#6D257D] font-bold">Ajouter un nouveau logement </h3>
    <form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 wire:submit.prevent="submit">
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="nom">Nom Appartement</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="nom" placeholder="Entrer le nom" wire:model="nom">
            @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-rue">Rue</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="résidence Adzap" class="form-control" id="adresse-rue" placeholder="rue"  wire:model="adresse_rue">
            @error('adresse_rue') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-etage">Etage</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-etage" placeholder="Entrer l'étage" wire:model="adresse_etage">
            @error('adresse_etage') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-ville">Ville</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="ville" value= "Odza" class="form-control" id="adresse-ville"  wire:model="adresse_ville">
            @error('adresse_ville') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="adresse-code-postal">Code Postal</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="adresse-code-postal" value ="Borne 12" placeholder=" "
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
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="capacite">Couchages max disponibles</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="capacite" placeholder="Entrer le nombre de couchages" 
            wire:model="capacite">
            @error('capacite') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="superficie">Superficie en m²</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="superficie" placeholder="Entrer la superficie" 
            wire:model="superficie">
            @error('superficie') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="tarif">Tarif</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" class="form-control" id="tarif" value="45" placeholder="ex. 45 "
            wire:model="tarif">
            @error('tarif') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class=" mt-4 block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <textarea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  class="form-control" id="description" placeholder="Entrer la description" wire:model="description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <button type="submit" class=" mb-10  bg-[#EA7869] hover:bg-green-400 text-[#6D257D] font-semibold mt-8 py-4 px-16 border border-none rounded shadow">Sauvegarder le logement</button>
    </form>
    </div>

