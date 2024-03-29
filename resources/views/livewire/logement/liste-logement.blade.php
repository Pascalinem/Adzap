<div>
<div class="flex flex-wrap">
@if($logements->count() > 0 )
@foreach ($logements as $logement)

<div class="{{$logement->id == $selected_logement_id  ? "bg-green-200" : ""}} w-full mx-4 my-4 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 rounded overflow-hidden shadow-lg">
  <a href="{{ '../logement/'.$logement->id }}"><img class="w-full h-60" src="{{ URL::asset('/images/'.$logement->nom.'/living'.$logement->nom.'.jpg') }}" alt="image"></a>
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2"> <a href="{{ '../logement/'.$logement->id }}">Appartement {{ $logement->nom }}</a></div>
      <p class="text-gray-700 text-base">
       
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      @if($logement_selectable)
        @if($logement->id == $selected_logement_id)
        <div class="transition delay-150">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>      
        Sélectionné
      </div>
        @else
        <span class="inline-block bg-green-200 rounded-full px-10 py-6 text-xl font-semibold text-black-700 mr-2 mb-2">
          <button type="button" wire:click="selectLogement('{{ $logement->id }}')">Sélectionner</button>
        </span>
        @endif
      @endif
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-[#ae76a6] rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="{{ route('options') }}">Options</a> </span>
      <span class="inline-block bg-[#B4A4B5]  rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="https://www.brusselsairlines.com/be/fr/homepage"> Voyage</a></span>
      <span class="inline-block bg-[#EA7869] rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="https://www.lachainemeteo.be/meteo-cameroun/ville-4401/previsions-meteo-yaounde-aujourdhui">Meteo</a> </span>
    </div>
  </div>
 
@endforeach
@else
<p class="text-gray-700 text-base">
  Aucun appartement de disponible pour la période souhaitée OU ayant une capacité suffisante (4 ou 5 personnes). 
</p>
@endif

</div>
</div>
