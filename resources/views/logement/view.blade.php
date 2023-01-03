
<x-guest-layout>
<div class="flex items-center justify-between"> 
    <h1 class="mt-10 text-xl font-bold text-gray-800 md:text-2xl ">Appartement  {{ $logement->nom }}</h1>
</div>

<div class="grid gap-4 grid-cols-2 grid-rows-1 mt-6">
    <div class=" px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <img style="width:800px;" src="{{ URL::asset('/images/'.$logement->nom.'/living'.$logement->nom.'.jpg') }}" alt="living"/>

    </div>
    <div>
        
            <img class="hover:scale-150 transition-all inline-block px-2 py-6 mx-auto bg-gray-200 rounded-lg  w-80 h-90" src="{{ URL::asset('/images/'.$logement->nom.'/cuisine'.$logement->nom.'.jpg') }}" alt="cuisine"/>
        
      
            <img class="hover:scale-150 transition-all inline-block px-2 py-6  bg-gray-200 rounded-lg  w-80" src="{{ URL::asset('/images/'.$logement->nom.'/sdb'.$logement->nom.'.jpg') }}" alt="sdb"/>
        
    </div>
</div>
<div >
    <h3 class="inline-block mt-10 text-2xl text-blue-500 font-bold">Appartement {{ $logement->nombre_chambres }} chambres </h3>
    
   
    <p class="my-10"> {{ $logement->description }}
    </p>
</div>
<div>
    <h2 class="text-xl text-[#6D257D] my-6 font-bold" >Disponibilités</h2>
<span class=" text-sm mx-20 w-100"> @livewire('logement.logement-calendar',['logement_id'=> $logement->id])</span>

</div>
@livewireScripts
    @stack('scripts')
</x-guest-layout>
    

    
