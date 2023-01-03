<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-[#ae76a6] ">
    <h1 class="font-sans text-white" > Bienvenue sur residenceadzap.net !</h1>
    <div>
        <p class="font-sans-[Verdana]"> Nous sommes heureux de t'accueilir bientôt à la résidence Adzap. Tu peux faire ta reservation pour profiter d'un séjour inoubliable dans l'un de nos logements. 
            Nous t'offrons un cadre sécurisé, un service de qualité, une proximité à l'aéroport qui t'épargnera le stress du déplacement et un tas d'autres avantages.</p>
        <p>Prêt à reserver ton séjour?</p>
    </div>
        <form method="GET" action="{{ route('adzap_et_la_ville') }}">
            @csrf
            <button class="font-bold border-none text-[#B4A4B5] text-2xl rounded-lg ml-2 p-6 btn btn-secondary btn-sm bg-[#6D257D] ">C'est parti!</button>
        </form>
    </div>
        <p> class=" mt-8 font-serif">
            L'équipe de la résidence Adzap
        </p>
    </div>
</body>
</html>