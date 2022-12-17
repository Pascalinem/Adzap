
<x-guest-layout>
<div class="flex items-center justify-between"> 
    <h1 class="mt-10 text-xl font-bold text-gray-800 md:text-2xl ">Appartement  {{ $logement->nom }}</h1>
</div>

<div class="grid gap-4 grid-cols-2 grid-rows-1 mt-6">
    <div class=" px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <img style="width:800px;" src="{{ Vite::asset('resources/images/'.$logement->nom.'/living'.$logement->nom.'.jpg') }}" alt="living"/>

    </div>
    <div>
        <div  class=" px-2 py-6 mx-auto bg-white rounded-lg shadow-md">
            <img style="width:300px; " src="{{ Vite::asset('resources/images/'.$logement->nom.'/cuisine'.$logement->nom.'.jpg') }}" alt="cuisine"/>
        </div>
        <div class=" px-2 py-6 mx-auto bg-white rounded-lg shadow-md">
            <img style="width:300px;" src="{{ Vite::asset('resources/images/'.$logement->nom.'/sdb'.$logement->nom.'.jpg') }}" alt="sdb"/>
        </div>
    </div>
</div>
<div >
    <h3 class="mt-10 text-2xl text-blue-500 font-bold">Appartement {{ $logement->nombre_chambres }} chambres </h3>
    <p class="mt-10"> {{ $logement->description }}
    </p>
</div>
</x-guest-layout>
    

    
