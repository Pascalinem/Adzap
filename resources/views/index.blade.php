<x-guest-layout>
    <div  class="flex flex-col  bg-[url('../../storage/app/public/hero2.jpg')] bg-no-repeat bg-cover ">
        
        <div class="container mx-auto flex flex-col items-center px-2 py-12 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl">
            <h1 class="text-3xl text-[#7E201F] font-bold leading-none sm:text-5xl">Résidence Adzap, locations meublées de vacances. Votre
               <span class="text-[#EA7869]">oasis de paix</span> à Odza, borne 12
            </h1>
            <p class="px-8 mt-8 mb-12 text-lg text-[#7E201F]">Lieu calme et sécurisé, un cadre agréable pour vos séjours à Yaoundé, à 12 min de l'aéroport !</p>
            <div class="flex flex-wrap justify-center">
                <form method="GET" action="{{ route('nouvelle-reservation') }}">
                    @csrf
                      <button class="font-bold border-none text-[#7E201F] text-2xl rounded-lg bg-[#EA7869] p-6 btn btn-secondary btn-sm" type="submit">Reservez votre séjour</button>
                 </form>
                 <form method="GET" action="{{ route('adzap_et_la_ville') }}">
                    @csrf
                      <button class="font-bold border-none text-[#B4A4B5] text-2xl rounded-lg ml-2 p-6 btn btn-secondary btn-sm bg-[#6D257D] ">En savoir plus </button>
               </form>
            </div>
         </div>
         

    </div>
</x-guest-layout>   