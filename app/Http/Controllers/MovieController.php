<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Builders\{FormBuilder, SearchBuilder};
use App\Forms\{MovieForm, MovieFilterForm};
use App\Models\Movie;


class MovieController extends BaseController
{

    private $movie;


    /**
     * MovieController constructor.
     */
    public function __construct()
    {
        $this->movie = new Movie;
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
            'filters' => (new FormBuilder(new MovieFilterForm()))->build()
        ]);
    }


    /**
     * Apply the search filters and return the results.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function filter(Request $request): View
    {
        $movies = (new SearchBuilder($this->movie, $request))->apply()
            ->bySortName()
            ->paginate();

        return view('pages.movies.index', [
            'movies' => $movies,
            'filters' => (new FormBuilder(new MovieFilterForm()))->build()
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
            'filters' => (new FormBuilder(new MovieForm()))->build()
        ]);
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
