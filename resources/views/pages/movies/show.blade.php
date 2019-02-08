@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')

    <section>

        <div class="row">
            <div class="col-12">
                <pre>
                    {{ print_r($movie) }}
                </pre>
            </div>
        </div>

    </section>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
