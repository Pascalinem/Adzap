
<x-guest-layout>
    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-16">      
      <div class="mt-5 col-md-8">
            <div class="card">
              <div class="card-header bg-success">
                <h2 class="text-2xl text-[#6D257D] text-blue font-bold mb-6 bg-[#B4A4B5] rounded ">Liste de nos logements</h2>
              </div>
              <div class="card-body">
                @livewire('logement.liste-logement')
              </div>
            </div>
            <div class="card-body">
            @livewire('reservation.recherche-reservation')
            </div>
      </div>
  </div>
    @livewireScripts
</x-guest-layout>
   

