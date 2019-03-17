<ul class="list-unstyled">
    @foreach($characters as $character)
        <li style="display:inline-block">
            @if(in_array($character, $letters))
                <a class="d-block p-2" href="{{ route('movies.index') }}?starts={{ $character }}">{{ $character }}</a>
            @else
                <span class="d-block p-2 text-muted">{{$character}}</span>
            @endif
        </li>
    @endforeach
</ul>