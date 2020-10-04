<section class="pt-3 pb-3">

    <h2 class="pb-2">{{ $heading }}</h2>

    <div class="row">

        @foreach($movies as $movie)
            <div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center ">
                <a href="{{ route('movies.show', [$movie->imdb_id]) }}">
                    <img class="img-fluid pb-3" src="{{ $movie->imagePath }}" alt="{{ $movie->name }}" title="{{ $movie->name }}">
                </a>
            </div>
        @endforeach

    </div>

</section>
