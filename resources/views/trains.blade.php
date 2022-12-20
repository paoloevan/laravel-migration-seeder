<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header');

    <main>
        <div class="container">
            <div class="row row-cols-3 gy-5">
                @forelse ($trains as $train)
                <div class="col">
                    <ul>
                        <li>Codice treno: {{$train->train_code}}</li>
                        <li>{{$train->company}}</li>
                        <li>In partenza da {{$train->departure_station}} alle ore {{$train->departure_time}}</li>
                        <li>Arriva a {{$train->destination_station}} alle ore {{$train->destination_time}}</li>
                    </ul>
                </div>
                @empty
                <h3>Trains not found</h3>
                @endforelse
            </div>
        </div>
    </main>

    @include('partials.footer');


</body>

</html>