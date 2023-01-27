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

            </div>
       






</x-guest-layout>
