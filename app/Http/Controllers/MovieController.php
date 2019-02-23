<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use App\Forms\{MovieForm, MovieFilterForm};
use App\Builders\{FormBuilder, SearchBuilder};


class MovieController extends BaseController
{

    private $movie;


    /**
     * MovieController constructor.
     */
    public function __construct()
    {
       //
    }


    /**
     * Display all movies.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $movies = Movie::bySortName()->paginate();
        return view('pages.movies.index', [
            'movies' => $movies,
            'form' => (new FormBuilder(new MovieFilterForm()))->build()
        ]);
    }


    /**
     * Apply the search filters and return the results.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function filter(Request $request): View
    {
        $movies = (new SearchBuilder(new Movie, $request))->apply()
            ->bySortName()
            ->paginate();

        return view('pages.movies.index', [
            'movies' => $movies,
            'form' => (new FormBuilder(new MovieFilterForm()))->build()
        ]);
    }


    /**
     * Show the selected movie.
     * @param Movie $movie
     * @return View
     */
    public function show(Movie $movie): View
    {
        return view('pages.movies.show', [
            'movie' => $movie
        ]);
    }


    /**
     * Display the form to create a new movie.
     * @return View
     */
    public function create()
    {
        return view('pages.movies.create', [
            'form' => (new FormBuilder(new MovieForm()))->build()
        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(Movie $movie)
    {
        return view('pages.movies.edit', [
            'movie' => $movie,
            'form' => (new FormBuilder(new MovieForm(), $movie->getAttributes()))->build()
        ]);
    }


    public function update(MovieRequest $request, Movie $movie)
    {
        return view('pages.movies.edit', [
            'movie' => $movie,
            'form' => (new FormBuilder(new MovieForm(), $movie->getAttributes()))->build()
        ]);
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
