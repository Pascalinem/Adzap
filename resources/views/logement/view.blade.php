
<x-guest-layout>
<div class="flex items-center justify-between"> 
    <h1 class="mt-10 text-xl font-bold text-gray-800 md:text-2xl ">Appartement  {{ $logement->nom }}</h1>
</div>

<div class="grid gap-4 grid-cols-2 grid-rows-1 mt-6">
    <div class=" px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <img style="width:800px;" src="{{ Vite::asset('resources/images/living1.jpg') }}" alt="sdb1"/>

    </div>
    <div>
        <div  class=" px-2 py-6 mx-auto bg-white rounded-lg shadow-md">
            <img style="width:300px;" src="{{ Vite::asset('resources/images/cuisine1.jpg') }}" alt="sdb1"/>
        </div>
        <div class=" px-2 py-6 mx-auto bg-white rounded-lg shadow-md">
            <img style="width:300px;" src="{{ Vite::asset('resources/images/sdb1.jpg') }}" alt="sdb1"/>
        </div>
    </div>
</div>
<div >
    <h3 class="mt-10 text-2xl text-blue-500 font-bold">Appartement 3 chambres </h3>
    <p class="mt-10"> do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
        ut aliquip ex ea commodo consequat. 
        <p>Duis aute irure dolor in reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
    </p>
    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.
    </p>
</div>
</x-guest-layout>
    

    
