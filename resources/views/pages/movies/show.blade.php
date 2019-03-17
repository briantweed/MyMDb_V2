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
                <p class="text-warning" title="{{ $movie->rating }}">{!! $movie->starRating !!}</p>
            </div>
        </div>

    </section>


    <section id="movie-description" class="pb-3">

        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <img class="img-fluid pb-3" src="{{ $movie->imagePath }}" alt="{{ $movie->name }} poster">
            </div>
            <div class="col-12 col-sm-8 col-md-9 offset-lg-1">
                <h1 class="font-weight-bold d-none d-md-block">{{ $movie->name }}</h1>
                <p class="text-warning  d-none d-md-block" title="{{ $movie->rating }}">{!! $movie->starRating !!}</p>
                <p>{{ $movie->released }} | {{ $movie->runningTimeInHours }}  | {{ $movie->format->type }} | {{ $movie->certificate->title }}
                    @if( $movie->genres->count() )
                        <br>
                        @foreach( $movie->genres as $genre )
                            {{ $genre->type }}@if(!$loop->last),@endif
                        @endforeach
                    @endif
                    @if( $movie->tags->count() )
                        <br>
                        @foreach( $movie->tags as $tag )
                            {{ $tag->word }}@if(!$loop->last),@endif
                        @endforeach
                    @endif
                </p>
                <p class="pt-3">{{ nl2br($movie->bio) }}</p>
                <a class="btn btn-info" href="{{ route('movies.edit', ['id' => $movie->slug]) }}">edit movie</a>
            </div>
        </div>

    </section>


    <section id="cast-details" class="pt-3 pb-3">

        @h2 Cast @endh2

        <div class="row">

            @foreach($movie->cast as $cast)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                    <a href="{{ route('people.show', [$cast->slug]) }}">
                        {{ $cast->star }}<img class="img-fluid pb-3" src="{{ $cast->imagePath }}" alt="{{ $cast->fullname }}" title="{{ $cast->fullname }} - {{ $cast->pivot->character }}">
                    </a>
                </div>
            @endforeach


        </div>

    </section>

@empty($movie->crew)
    <section id="crew-details" class="pt-3 pb-5">

        @h2 Crew @endh2

        <div class="row">
            @foreach($movie->crew as $crew)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                    <a href="{{ route('people.show', [$crew->slug]) }}">
                        <img class="img-fluid pb-3" src="{{ $crew->imagePath }}" alt="{{ $crew->fullname }}" title="{{ $crew->fullname }} - {{ $crew->pivot->position }}">
                    </a>
                </div>
            @endforeach

        </div>

    </section>
@endempty
@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
