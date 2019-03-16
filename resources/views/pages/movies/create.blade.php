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

                <h2>Add New Movie</h2>

                @include('pages.partials.errors')

                <form class="mb-3" method="post" action="{{ route('movies.store') }}">

                    @movieForm

                </form>

            </div>

        </div>

    </main>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
