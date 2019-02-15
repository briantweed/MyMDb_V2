<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Searches\MovieSearch;


class MovieController extends Controller
{

    use MovieSearch;


    public function __construct()
    {
        //
    }


    public function index()
    {
        $movies = Movie::bySortName()->paginate();
        return view('pages.movies.index', [
            'movies' => $movies
        ]);
    }


    public function filter(Request $request)
    {
        $movies = $this->applyFilters($request);
        return view('pages.movies.index', [
            'movies' => $movies
        ]);
    }


    public function show(Movie $movie)
    {
        return view('pages.movies.show', [
            'movie' => $movie
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
