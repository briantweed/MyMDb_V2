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
                <td>{{ $movie->format->type }}</td>
                <td>{{ $movie->studio->name }}</td>
                <td>{{ $movie->certificate->title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>