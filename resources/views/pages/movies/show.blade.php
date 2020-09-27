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
                <p>
                    {{ $movie->released }} |
                    {{ $movie->runningTimeInHours }}  |
                    {{ $movie->format->type }} |

                    {{ $movie->studio->name }}
                    @if( $movie->genres->count() )
                        <br>
                        @foreach( $movie->genres as $genre )
                            {{ $genre->type }}@if(!$loop->last){{','}}@endif
                        @endforeach
                    @endif
                    @if( $movie->tags->count() )
                        <br>
                        @foreach( $movie->tags as $tag )
                            {{ $tag->word }}@if(!$loop->last){{','}}@endif
                        @endforeach
                    @endif
                </p>
                <p class="pt-3">{{ nl2br($movie->bio) }}</p>
                <a class="btn btn-info" href="{{ route('movies.edit', ['movie' => $movie->slug]) }}">edit movie</a>
            </div>
        </div>

    </section>


    @if($movie->cast->count())
        <section id="cast-details" class="pt-3 pb-3">

            <h2 class="pb-2">Cast</h2>

            <div class="row">
                @foreach($movie->cast as $person)

                    @include('pages.movies.partials.movie_person')

                @endforeach
            </div>

        </section>
    @endif


    @if($movie->crew->count())
        <section id="crew-details" class="pt-3 pb-5">

            <h2 class="pb-2">Crew</h2>

            <div class="row">
                @foreach($movie->crew as $person)

                    @include('pages.movies.partials.movie_person')

                @endforeach

            </div>

        </section>
    @endif

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
