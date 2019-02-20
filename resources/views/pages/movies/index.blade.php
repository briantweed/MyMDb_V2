@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')

    <main>

        <div class="row">

            <div class="col-12 col-sm-3">

                <form class="mb-3" action="{{ route('movies.filter') }}">
                    {!! $form !!}
                </form>

            </div>

            <div class="col-12 col-sm-9">

                <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
                @include('pages.movies.partials.movies-table')

                @include('pages.partials.pagination', ['collection' => $movies])

            </div>

        </div>

    </main>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
