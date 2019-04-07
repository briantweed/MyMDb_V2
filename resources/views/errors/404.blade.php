@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}
    <style>
        p.code {
            font-size: 5rem;
            font-weight: 900;
        }
        blockquote {
            position: relative;
            padding-left: 1rem;
        }
        blockquote::before {
            content: '\f10d';
            font-family: "Font Awesome 5 Free";
            font-weight: 700;
            position: absolute;
            left: -1rem;
            top: -.25rem;
            font-size: 1.2rem;
        }
        .quote {
            font-size: 1.5rem;
            position: relative;
            display: inline-block;
        }
        cite {
            font-size: 0.8rem;
            position: absolute;
            right: .5rem;
            bottom: -2rem;
            text-align: right;
        }
    </style>
@endsection



@section('content')

    <main>

        <div class="row justify-content-center">

            <div class="col-10">

                <div class="d-flex justify-content-sm-center align-items-center" style="min-height: 50vh;">

                    <div class="pr-5" >
                        <p class="code">404</p>
                    </div>
                    <div class="pl-5" style="border-left: 2px solid #f90">
                        <div class="d-flex align-items-center" style="min-height:5rem;">
                            <blockquote>
                                <div class="quote">
                                    {{ $quote->text }}
                                    <cite>
                                        <a href="{{ route('movies.show', [$quote->movie->slug]) }}">{{ $quote->movie->name }} ({{ $quote->movie->released }})</a>

                                    </cite>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
