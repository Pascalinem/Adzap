<x-guest-layout>

<div class="ml-8">
    <h1 class="font-bold text-xl my-10 "> Bonjour {{ Auth::user()->name }} et merci pour votre reservation à la résidence Adzap.</h1>
    <p class="mb-6">Reservation de l'appartement {{ $reservation->logement->nom }} du {{ date('d-m-Y', strtotime($reservation->created_at)) }} - <span class="text-green-700">{{ $reservation->statut->nom }}</span></p>

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

    <button class="p-4 mr-6 rounded-lg bg-[#ae76a6]"> <a href="mailto:residenceadzap1@gmail.com"  target="blank">Modifier ma reservation <span class="text-xs text-white">(mail)</span></a></button>
    <button class="p-4 rounded-lg mb-10 bg-[#ae76a6] inline-block"><a href="{{ route('dashboard') }}"> Mon historique de reservations</a></button>

    <p class=" mb-8 text-sm text-red-700 italic "> Pour <span class="underline">l'annulation</span> ou la <span class="underline">modification</span> de vos reservations, envoyez-nous un 
        <span class="underline">e-mail</span> ou contactez-nous par <span class="underline">téléphone</span>.<br> Nous mettons tout en oeuvre pour automatiser ce service. Merci pour votre confiance</p> 
    
</div>
</x-guest-layout> 