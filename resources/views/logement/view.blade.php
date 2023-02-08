
<x-guest-layout>
<div class="flex items-center justify-between"> 
    <h1 class="ml-8 pl-2 mt-10 mb-8 text-xl font-bold text-gray-800 md:text-2xl ">Nos locations - Appartement  {{ $logement->nom }}</h1>
</div>


  <div class="container mx-auto">
    <div class="grid-cols-3 p-10 space-y-2 bg-[#ea7869] lg:space-y-0 lg:grid lg:gap-3 lg:grid-rows-3">
        <div class="w-full  col-span-2 row-span-2 rounded">
            <img src="{{ URL::asset('/images/'.$logement->nom.'/living'.$logement->nom.'.jpg') }}"
                alt="living">
        </div>
        <div class="w-full  rounded">
            <img src="{{ URL::asset('/images/'.$logement->nom.'/terrasse'.$logement->nom.'.jpg') }}"
                alt="terrasse">
        </div>
        <div class="w-full rounded">
            <img  src="{{ URL::asset('/images/'.$logement->nom.'/sdb'.$logement->nom.'.jpg') }}"
                alt="sdb">
        </div>
        <div class="w-full rounded">
            <img src="{{ URL::asset('/images/'.$logement->nom.'/cuisine'.$logement->nom.'.jpg') }}" 
                alt="cuisine">
        </div>
        <div class="w-full rounded">
            <img src="{{ URL::asset('/images/'.$logement->nom.'/chambre1'.$logement->nom.'.jpg') }}" 
                alt="chambre 1">
        </div>
        <div class="w-full rounded">
            <img src="{{ URL::asset('/images/'.$logement->nom.'/chambre2'.$logement->nom.'.jpg') }}" 
                alt="chambre 2">
        </div>
        
    </div>
</div>







<div class="ml-8">
    <h3 class=" inline-block mt-10 text-2xl text-[#ae76a6] font-bold">Appartement {{ $logement->nombre_chambres }} chambres </h3>
    
   
    <p class="my-10"> {{ $logement->description }}
    </p>
<div>
    <h2 class="text-xl text-[#6D257D] my-6 font-bold" >Disponibilités</h2>
<span class=" text-sm mx-20 w-50"> @livewire('logement.logement-calendar',['logement_id'=> $logement->id])</span>
<span class=" text-sm mx-20 w-50"> @livewire('logement.nouvelle-reservation-logement',['logement_id'=> $logement->id])</span>
    
    
</div>
@livewireScripts
    @stack('scripts')
</x-guest-layout>
    

    
