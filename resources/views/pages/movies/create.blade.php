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

                <form class="mb-3" action="{{ route('movies.store') }}">
                    {!! $filters !!}
                    {{ csrf_field() }}
                </form>

            </div>

        </div>

    </main>

@endsection


@section('jquery')
    {{-- <script src="{{ mix('') }}"></script> --}}
@endsection
