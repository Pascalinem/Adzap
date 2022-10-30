<div>
<div class="flex flex-wrap">
@foreach ($logements as $logement)

<div class="w-full mx-4 my-4 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ Vite::asset('resources/images/living'.($loop->iteration).'.jpg') }}" alt="image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2"> <a href="{{ $logement->id }}">Appartement {{ $logement->nom }}</a></div>
      <p class="text-gray-700 text-base">
        {{ $logement->description }}
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
  
@endforeach
</div>
</div>
