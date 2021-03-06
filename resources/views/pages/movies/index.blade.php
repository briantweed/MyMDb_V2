@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')

    <main>

        <div class="row">

            <div class="col-12 col-sm-3">

                @include('pages.movies.partials.movie_filter')

            </div>

            <div class="col-12 col-sm-9">

                @include('pages.movies.partials.movie_letters')

                <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Add New Movie</a>

                @include('pages.movies.partials.movies_table')

                @include('pages.partials.pagination', ['collection' => $movies])

            </div>

        </div>

    </main>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
