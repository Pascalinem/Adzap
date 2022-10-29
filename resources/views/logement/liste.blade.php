
<x-guest-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-8">
                <div class="card">
                  <div class="card-header bg-success">
                    <h2 class="text-white">Liste des logements</h2>
                  </div>
                  <div class="card-body">
                    @livewire('logement.liste-logement')
                  </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
  </x-guest-layout>
   

