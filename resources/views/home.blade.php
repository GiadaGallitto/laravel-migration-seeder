<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Trains List</h1>
                </div>
                @forelse ($trains as $train)
                    <div class="col-4 card">
                        <h4>{{$train->Azienda}}</h4>
                        <ul class="list-unstyled">
                            <li><strong>Stazione di partenza: </strong>{{$train->stazione_di_partenza}}</li>
                            <li><strong>Stazione di arrivo: </strong>{{$train->stazione_di_arrivo}}</li>
                            <li><strong>Orario di partenza: </strong>{{$train->orario_di_partenza}}</li>
                            <li><strong>Orario di arrivo: </strong>{{$train->orario_di_arrivo}}</li>
                            <li><strong>Codice treno: </strong>{{$train->codice_treno}}</li>
                            <li><strong>Numero carrozze: </strong>{{$train->numero_carrozze}}</li>
                            <li><strong>In orario: </strong>{{$train->in_orario}}</li>
                            <li><strong>Cancellato: </strong>{{$train->Cancellato}}</li>
                        </ul>
                    </div>
                @empty
                    <p>Nessun treno è presente</p>
                @endforelse
            </div>

        </div>
    </main>

</body>

</html>
