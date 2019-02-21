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
                <form class="mb-3" action="{{ route('movies.update', ['id' => $movie->id]) }}">
                    {!! $form !!}
                    {{ csrf_field() }}
                </form>

            </div>

        </div>

    </main>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
