
<x-guest-layout>
    <div class="container mx-6 mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="mt-8 col-md-8">
                <div class="card">
                  <div class="card-header bg-success">
                    <h2 class="font-bold text-[#6D257D] text-xl mt-4 ">Liste des utilisateurs enregistrés</h2>
                  </div>
                  <div class="mr-10 mb-10 card-body">
                    @livewire('utilisateur.utilisateurs-datatable')
                  </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</x-guest-layout>
