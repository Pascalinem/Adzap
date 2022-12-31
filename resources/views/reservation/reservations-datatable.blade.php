
<x-guest-layout>
    <div class="container mx-6 mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-8">
                <div class="card">
                  <div class="card-header bg-success">
                   
                  </div>
                  <div class="mr-10 card-body">
                    @livewire('reservation.reservations-datatable')
                    @livewire('reservation.reservations-calendar')
                  </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    @stack('scripts')
</x-guest-layout>
