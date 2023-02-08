<x-guest-layout>


        
            <div> 
                <h3 class="text-[#B4A4B5] text-2xl ml-8 my-10">Mon tableau de bord </h3>
                <h3 class="text-[#B4A4B5] text-xl ml-8 my-6"> Mes reservations</h3>
                @if($reservations->count() > 0 )
                    <table class="table ml-8 table-sm  border-collapse border border-slate-500 mb-10">
                        <thead>
                            <tr>
                                <th class="bg-[#B4A4B5] font-bold border border-slate-600 px-6">Numéro de reservation</th>
                                <th class="bg-[#B4A4B5] font-bold border border-slate-600 px-6">Début séjour</th>
                                <th class="bg-[#B4A4B5] font-bold  border border-slate-600 px-6">Fin séjour</th>
                                <th class="bg-[#B4A4B5] font-bold border border-slate-600 px-6">Nombre personnes</th>
                                <th class="bg-[#B4A4B5] font-bold border border-slate-600 px-6">Total séjour</th>
                                
                            </tr>
                
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr>
                                <td class="border border-slate-600 px-6"><a href="reservation/{{$reservation->id}}">RES{{ $reservation->id }}2023</a></td>
                                <td class="border border-slate-600 px-6">{{ date('d-m-Y', strtotime($reservation->date_debut)) }}</td>
                                <td class="border border-slate-600 px-6">{{ date('d-m-Y', strtotime($reservation->date_fin)) }}</td>
                                <td class="border border-slate-600 px-6">{{ $reservation->nombre_personnes}}</td>
                                <td class="border border-slate-600 px-6">{{ $reservation->prix_total }} € ou {{ $reservation->prix_cfa }} F CFA </td>
                            </tr>
                            @endforeach   
                        </tbody>
                     </table>           
                    
            
                @else
                <p class="text-gray-700 text-base">
                Aucune reservation à ce jour. Nous espérons vous accueillir très bientôt. 
                </p>
                @endif
                <h3 class="text-[#B4A4B5] text-xl ml-8 my-10">Mes données personnelles</h3>
               <p class=" ml-8 my-4"> Nom: {{ Auth::user()->name }}</p>
                <p  class=" ml-8 my-4">E-mail:{{  Auth::user()->email }}</p>


                <!-- component -->

    <div class="mx-auto container max-w-2xl md:w-3/4 mb-6">

      <div class="bg-gray-&00 space-y-6">
        <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 max-w-sm mx-auto">Mon compte</h2>
          <div class="md:w-2/3 max-w-sm mx-auto">
            <label class="text-sm text-gray-400">E-mail</label>
            <div class="w-full inline-flex border">
              <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                <svg
                  fill="none"
                  class="w-6 text-gray-400 mx-auto"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </div>
              <input
                type="email"
                class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                placeholder="{{  Auth::user()->email }}"
                disabled
              />
            </div>
          </div>
        </div>

        <hr />
        <div class="md:inline-flex  space-y-2 md:space-y-0  w-full p-2 text-gray-500 items-center">
          <h2 class="md:w-1/3 mx-auto max-w-sm">Informations perso</h2>
          <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
            <div>
              <label class="text-sm text-gray-400">Nom.s</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                  placeholder="votre nom complet"
                />
              </div>
            </div>
           
            
          
            <div>
              <label class="text-sm text-gray-400">Numéro de téléphone</label>
              <div class="w-full inline-flex border">
                <div class="pt-2 w-1/12 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                  placeholder="12341234"
                />
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="md:inline-flex w-full space-y-2 md:space-y-0 p-4 text-gray-500 items-center">
          <h2 class="md:w-4/12 max-w-sm mx-auto">Modifier le mot de passe</h2>

          <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
            <div class="w-full inline-flex border-b">
              <div class="w-1/12 pt-2">
                <svg
                  fill="none"
                  class="w-6 text-gray-400 mx-auto"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                  />
                </svg>
              </div>
              <input
                type="password"
                class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4"
                placeholder="Nouveau mot de passe"
              />
            </div>
          </div>

          <div class="md:w-3/12 text-center md:pl-6">
            <button class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
              <svg
                fill="none"
                class="w-4 text-white mr-2"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                />
              </svg>
              Mettre à jour
            </button>
          </div>
        </div>

        <hr />
        <div class="w-full p-4 text-right text-gray-500">
          <button class="inline-flex items-center focus:outline-none mr-4">
            <svg
              fill="none"
              class="w-4 mr-2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
              />
            </svg>
            Supprimer mon compte
          </button>
        </div>
      </div>
    </div>
  

            </div>
       






</x-guest-layout>
