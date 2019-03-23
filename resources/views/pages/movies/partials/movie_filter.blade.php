<div id="movie_filters">
    <form class="mb-3" action="{{ route('movies.index') }}">
        {!! $filters !!}
    </form>
</div>