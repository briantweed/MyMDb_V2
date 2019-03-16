<ul class="list-unstyled">
    @foreach($letters as $letter => $array)
        <li style="display:inline-block">
            <a class="d-block p-2" href="{{ route('movies.index') }}?starts={{ $letter }}">{{ $letter }}</a>
        </li>
    @endforeach
</ul>