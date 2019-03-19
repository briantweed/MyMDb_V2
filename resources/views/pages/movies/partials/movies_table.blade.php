<div class="table-responsive">
    <table class='table'>
        <thead>
        <tr>
            <th>Title</th>
            <th class="text-center">Released</th>
            <th class="text-center">Rating</th>
            <th>Format</th>
            <th>Studio</th>
            <th class="text-center">Certificate</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td><a href="{{ route('movies.show', [$movie->slug]) }}">{{ $movie->name }}</a></td>
                <td class="text-center">{{ $movie->released }}</td>
                <td class="text-center">{{ $movie->rating }}</td>
                <td>{{ $movie->format()[$movie->format_id] }}</td>
                <td>{{ $movie->studio()[$movie->studio_id] }}</td>
                <td class="text-center">{{ $movie->certificate()[$movie->certificate_id] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
