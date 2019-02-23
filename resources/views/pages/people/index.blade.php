@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')

    <section>

        <div class="table-responsive">
            <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Born</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($people as $person)
                    <tr>
                        <td><a href="{{ route('people.show', [$person->slug]) }}">{{ $person->fullname }}</a></td>
                        <td>{{ optional($person->birthday)->format('jS F Y') ?? '---' }}</td>
                        <td>{{ $person->age }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @if($people instanceof \Illuminate\Pagination\LengthAwarePaginator )
            <div class="row">
                <div class="col-12">
                    {{ $people->links() }}
                </div>
            </div>
        @endif

    </section>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
