<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>TTL | Schedule</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class='container'>
            <div class="row">
                <div class="col-12">
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Released</th>
                                <th>Format</th>
                                <th>Certificate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{!! $movie->name !!}</td>
                                    <td>{{ $movie->released }}</td>
                                    <td>{{ $movie->format->type }}</td>
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
        </div>
    </body>
</html>
