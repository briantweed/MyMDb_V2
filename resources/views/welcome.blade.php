<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>body{background:#000000; color: #888</style>
    </head>
    <body>
        <div>
            <h3>{{ $movie->name }}</h3>
            @foreach($movie->cast as $cast)

                {{ $cast->fullname }} <br>

            @endforeach
        </div>

        <div>
            <h3>{{ $person->fullname }}</h3>
            @foreach($person->roles as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach           

            <h4>Overview</h4>
            @foreach($person->positions as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach
            <h4>Directed</h4>
            @foreach($person->directed as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach            
            <h4>Produced</h4>
            @if(!$person->produced->count()) --- @endif
            @foreach($person->produced as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach
            <h4>Screenplay</h4>
            @foreach($person->scripted as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach
            <h4>Composer</h4>
            @if(!$person->produced->count()) --- @endif
            @foreach($person->scored as $movie)

                {{ $movie->name }} ({{ $movie->released}}) : {{ $movie->pivot->position}}   <br>

            @endforeach
        </div>
    </body>
</html>
