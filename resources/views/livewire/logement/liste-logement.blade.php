<div>
    <table style="width:100%">
        <thead>
            <tr>
                <th width="5%">

                </th>
                <th>
                    Nom
                </th>
                <th>
                    Adresse
                </th>
                <th>
                    Place
                </th>
            </tr>
        </thead>
    <tbody>
        @foreach ($logements as $logement)
        <tr>
            <td></td>
            <td><a href="{{ $logement->id }}">{{ $logement->nom }}</a></td>
            <td>{{ $logement->adresse_rue." - ".$logement->adresse_ville }}</td>
            <td>{{ $logement->capacite }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
