@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')

    <section>

        <div class="row">
            <div class="col-12">
                <table class='table'>
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Released</th>
                        <th>Length</th>
                        <th>Format</th>
                        <th>Studio</th>
                        <th>Certificate</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td><a href="{{ route('movies.show', [$movie->id]) }}">{!! $movie->name !!}</a></td>
                            <td>{{ $movie->released }}</td>
                            <td>{{ $movie->running_time }}</td>
                            <td>{{ $movie->format->type }}</td>
                            <td>{{ $movie->studio->name }}</td>
                            <td>{{ $movie->certificate->title }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{ $movies->links() }}
            </div>
        </div>
    </section>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
