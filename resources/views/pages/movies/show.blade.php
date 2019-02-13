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
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <img class="img-fluid pb-3" src="{{ $movie->imagePath }}" alt="{{ $movie->name }} poster">
            </div>
            <div class="col-12 col-sm-8 col-md-9 col-lg-6 offset-lg-1">
                <h1 class="font-weight-bold d-none d-md-block">{{ $movie->name }}</h1>
                <p>{{ $movie->released }} | {{ $movie->runningTimeInHours }}  | {{ $movie->format->type }} | {{ $movie->certificate->title }}</p>
                <p class="pt-3 mb-0">{{ nl2br($movie->bio) }}</p>
            </div>
        </div>

    </section>


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


    <section id="cast-details" class="pt-3 pb-3">

        @h2 Cast @endh2

        <div class="row">

            @foreach($movie->mainCast as $cast)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                    <a href="{{ route('people.show', [$cast->id]) }}">
                        <img class="img-fluid pb-3" src="{{ $cast->imagePath }}" alt="{{ $cast->fullname }}" title="{{ $cast->fullname }}">
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row">
            @foreach($movie->supportingCast as $cast)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                    <a href="{{ route('people.show', [$cast->id]) }}">
                        <img class="img-fluid pb-3" src="{{ $cast->imagePath }}" alt="{{ $cast->fullname }}" title="{{ $cast->fullname }}">
                    </a>
                </div>
            @endforeach

        </div>

    </section>


    <section id="crew-details" class="pt-3 pb-5">

        @h2 Crew @endh2

        <div class="row">
            @foreach($movie->crew as $cast)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                    <a href="{{ route('people.show', [$cast->id]) }}">
                        <img class="img-fluid pb-3" src="{{ $cast->imagePath }}" alt="{{ $cast->fullname }}" title="{{ $cast->fullname }}">
                    </a>
                </div>
            @endforeach

        </div>

    </section>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
