<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div class="container">
        <h1>Список игр</h1>

            <ul class="games">
                @foreach ($games as $game)
                    <li class="game">
                        <img class="game__img" src="{{ $game->pathimage }}" alt="{{ $game->title }}">
                        <div class="game-content">
                            <h2 class="game-title">{{ $game->title }}</h2>
                            <p>Разработчик: {{ $game->developer }}</p>
                            <p>Жанр: @foreach($game->genres as $genre)
                                {{ $genre }}@if(!$loop->last), @endif

                        @endforeach</p>
                        <p>{{ $game->description }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>

    </div>
</body>
</html>
