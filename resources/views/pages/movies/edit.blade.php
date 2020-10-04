@extends('layouts.general')


@section('css')
    {{-- <link href="" rel="stylesheet" /> --}}
@endsection


@section('content')

    <main>

        <div class="row">

            <div class="col-12 col-sm-2">


            </div>

            <div class="col-12 col-sm-8">

                <h2>Edit {{ $movie->name }}</h2>

                @include('pages.partials.errors')

                <form class="mb-3" method="post" action="{{ route('movies.update', ['movie' => $movie->imdb_id]) }}">

                    @method('PATCH')
                    @include('pages.movies.partials.movie_form')

                </form>

            </div>

        </div>

    </main>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
