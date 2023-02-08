
<x-guest-layout>
    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-16">      
      <div class="mt-5 col-md-8">
            <div class="card">
              <div class="card-header bg-success">
                <h2 class="pl-4 text-2xl text-[#6D257D] text-blue font-bold mb-6 bg-[#B4A4B5] rounded ">Nos locations de vacances - Liste de nos appartements</h2>
              </div>
              <div class="card-body">
                @livewire('logement.liste-logement')
              </div>
            </div>
            
      </div>
  </div>
    @livewireScripts
</x-guest-layout>
   

