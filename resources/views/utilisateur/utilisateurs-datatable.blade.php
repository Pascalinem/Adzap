
<x-guest-layout>
    <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-8">
                <div class="card">
                  <div class="card-header bg-success">
                    <h2 class="text-white">Créer un nouveau logement</h2>
                  </div>
                  <div class="card-body">
                    @livewire('utilisateur.utilisateurs-datatable')
                  </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</x-guest-layout>
