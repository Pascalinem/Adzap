<x-guest-layout>

<div class="ml-8">
    <p class="font-bold text-xl my-10 "> Bonjour {{ Auth::user()->name }} et merci pour votre reservation à la résidence Adzap.</p>
    <p class="mb-6">Reservation du {{ date('d-m-Y', strtotime($reservation->created_at)) }} de l'appartement - {{ $reservation->statut }}</p>

    <table class="table table-sm  border-collapse border border-slate-500">
        <thead>
            <tr>
                <th class="bg-[#B4A4B5]">Récapitulatif de la reservation</th>
                <th class="bg-[#B4A4B5]"></th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td class="border border-slate-600 px-6">Début séjour</td>
                <td class="border border-slate-600 px-6">{{ date('d-m-Y', strtotime($reservation->date_debut)) }}</td>
                
               
            </tr>
            <tr>
                <td class="border border-slate-600 px-6">Fin séjour</td>
                <td class="border border-slate-600 px-6">{{ date('d-m-Y', strtotime($reservation->date_fin)) }}</td>
                
            </tr>
            <tr>
                <td class="border border-slate-600 px-6">Nombre personnes</td>
                <td class="border border-slate-600 px-6">{{ $reservation->nombre_personnes }}</td>
            </tr>
            <tr>
                <td class="font-bold border border-slate-600 px-6">Total séjour</td>
                <td class="font-bold border border-slate-600 px-6">{{ $reservation->prix_total }} € * </td>
            </tr>
        </tbody>
    </table>
    <p class="mb-10 text-sm">
       <i> * Le prix du séjour en F CFA est de {{ $reservation->prix_cfa }} F.</i>
    </p>

    <button class="p-4 mr-6 rounded-lg bg-[#ae76a6]"> Modifier ma reservation</button>
    <button class="p-4 rounded-lg mb-10 bg-[#ae76a6] inline-block"> Mes reservations</button>
    
</div>
</x-guest-layout> 