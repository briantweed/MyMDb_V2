@extends('layouts.general')


@section('css')
    {{-- <link href="" rel="stylesheet" /> --}}
@endsection


@section('banner')

    <section id="person-banner" class="banner" style="background-image:url({{ $person->bannerImagePath }});"></section>

@endsection


@section('content')

    <section id="person-title" class="pb-4">

        <div class="row d-block d-md-none">
            <div class="col-12">
                <h1 class="font-weight-bold">{{ $person->fullname }}</h1>
            </div>
        </div>

    </section>


    <section id="person-description" class="pb-3">

        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <img class="img-fluid pb-3" src="{{ $person->imagePath }}" alt="{{ $person->fullname }} poster">
            </div>
            <div class="col-12 col-sm-8 col-md-9 col-lg-8 offset-lg-1">
                <h1 class="font-weightww-bold d-none d-md-block">{{ $person->fullname }}</h1>
                <p>
                    @if($person->birthday)
                        {{ $person->born }}
                        @if($person->deceased)
                             - {{ $person->died }}
                        @endif
                        ({{ $person->age }})
                    @endif
                </p>
                <p class="pt-3 mb-0">{!! nl2br($person->bioWithLinks) !!}</p>
            </div>
        </div>

    </section>

    @if($person->roles->count())
        <section id="person-cast" class="pt-3 pb-3">

            <h2 class="pb-2">Roles</h2>

            <div class="row">

                @foreach($person->roles as $movie)
                    <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
                        <a href="{{ route('movies.show', [$movie->slug]) }}">
                            <img class="img-fluid pb-3" src="{{ $movie->imagePath }}" alt="{{ $movie->name }}" title="{{ $movie->name }} - {{ $movie->pivot->character }}">
                        </a>
                    </div>
                @endforeach

            </div>

        </section>
    @endif

    @if($person->directed->count())
        @include('pages.partials.movie-poster', [
            'heading' => 'Director',
            'movies' => $person->directed
        ])
    @endif

    @if($person->produced->count())
        @include('pages.partials.movie-poster', [
            'heading' => 'Writer',
            'movies' => $person->produced
        ])
    @endif

    @if($person->wrote->count())
        @include('pages.partials.movie-poster', [
            'heading' => 'Writer',
            'movies' => $person->wrote
        ])
    @endif

    @if($person->scored->count())
        @include('pages.partials.movie-poster', [
            'heading' => 'Composer',
            'movies' => $person->scored
        ])
    @endif

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
