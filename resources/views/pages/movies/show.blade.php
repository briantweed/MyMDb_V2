@extends('layouts.general')


@section('css')
    {{-- <link href="" rel="stylesheet" /> --}}
@endsection


@section('banner')

    <section id="movie-banner" class="banner" style="background-image:url({{ $movie->imagePath }});"></section>

@endsection


@section('content')

    <section id="movie-title" class="pb-4">

        <div class="row d-block d-md-none">
            <div class="col-12">
                <h1 class="font-weight-bold">{{ $movie->name }}</h1>
            </div>
        </div>

    </section>


    <section id="movie-description" class="pb-3">

        <div class="row">
            <div class="col-12 col-sm-4 col-md-3">
                <img class="img-fluid pb-3" src="{{ $movie->imagePath }}" alt="{{ $movie->name }} poster">
            </div>
            <div class="col-12 col-sm-8 col-md-9">
                <h1 class="font-weight-bold d-none d-md-block">{{ $movie->name }}</h1>
                <p>{{ $movie->released }} | {{ $movie->runningTimeInHours }}  | {{ $movie->format->type }} | {{ $movie->certificate->title }}</p>
                <p class="pt-3 mb-0">{{ nl2br($movie->bio) }}</p>
            </div>
        </div>

    </section>

    <hr>

    <section id="movie-details" class="pt-3 pb-3">

        @h2 Details @endh2

        @row @slot('label') Released @endslot {{ $movie->released }} @endrow

        @row @slot('label') Running Time @endslot {{ $movie->runningTimeInMinutes }} @endrow

        @row @slot('label') Format @endslot {{ $movie->format->type }} @endrow

        @row @slot('label') Rating @endslot {{ $movie->rating }} @endrow

        @row @slot('label') Studio @endslot {{ $movie->studio->name }} @endrow

        @row @slot('label') Purchased @endslot {{ $movie->purchased }} @endrow

        @row @slot('label') Certificate @endslot {{ $movie->certificate->title }} @endrow

        @row @slot('label') Genres @endslot
            @if( $movie->genres->count() )
                @foreach( $movie->genres as $genre )
                    {{ $genre->type }}@if(!$loop->last),@endif
                @endforeach
            @else --- @endif
        @endrow

        @row @slot('label') Tags @endslot
            @if( $movie->tags->count() )
                @foreach( $movie->tags as $tag )
                    {{ $tag->word }}@if(!$loop->last),@endif
            @endforeach
            @else --- @endif
        @endrow

    </section>

    <hr>

    <section id="cast-details" class="pt-3 pb-3">

        @h2 Cast @endh2

        @foreach($movie->mainCast as $cast)
            @row @slot('label')<a href="{{ route('people.show', [$cast->id]) }}">{{ $cast->fullname }}</a>@endslot {{ $cast->pivot->character }} @endrow
        @endforeach

        @if($movie->supportingCast->count())
            <br>
        @endif

        @foreach($movie->supportingCast as $cast)
            @row @slot('label')<a href="{{ route('people.show', [$cast->id]) }}">{{ $cast->fullname }}</a>@endslot {{ $cast->pivot->character }} @endrow
        @endforeach

    </section>

    <hr>

    <section id="crew-details" class="pt-3 pb-5">

        @h2 Crew @endh2

        @foreach($movie->crew as $crew)
            @row @slot('label'){{ $crew->fullname }}@endslot {{ $crew->pivot->position }} @endrow
        @endforeach

    </section>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
