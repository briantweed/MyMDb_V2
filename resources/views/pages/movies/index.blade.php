@extends('layouts.general')


@section('css')

    {{-- <link href="" rel="stylesheet" /> --}}

@endsection



@section('content')


    <form class="mb-3" action="{{ route('movies.filter') }}">
        @foreach($filters['fields'] as $filter)
            @if( $filter['type'] == 'select')
                <select name="field_{{ $filter['field'] }}" id="field_{{ $filter['field'] }}">
                    <option value="">- select -</option>
                    @foreach($filter['options'] as $key => $option)
                        <option @if(request('field_'.$filter['field']) == $key) selected @endif value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            @else
                <input type="{{ $filter['type'] }}" name="field_{{ $filter['field'] }}" placeholder="{{ $filter['label'] }}" value="{{ request('field_'.$filter['field']) }}">
            @endif
        @endforeach
        <input type="submit" value="submit" class="btn btn-sm btn-secondary">
    </form>

    <section>

        <div class="table-responsive">
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
                        <td><a href="{{ route('movies.show', [$movie->id]) }}">{{ $movie->name }}</a></td>
                        <td>{{ $movie->released }}</td>
                        <td>{{ $movie->runningTimeInMinutes }}</td>
                        <td>{{ optional($movie->format)->type }}</td>
                        <td>{{ optional($movie->studio)->name }}</td>
                        <td>{{ optional($movie->certificate)->title ?? '---'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @if($movies instanceof \Illuminate\Pagination\LengthAwarePaginator )
            <div class="row">
                <div class="col-12">
                    {{ $movies->appends($_GET)->links() }}
                </div>
            </div>
        @endif
        
    </section>

@endsection



@section('jquery')

    {{-- <script src="{{ mix('') }}"></script> --}}

@endsection
