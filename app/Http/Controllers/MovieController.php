<?php

namespace App\Http\Controllers;

use App\Forms\MovieFilterForm;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Builders\{FormBuilder, SearchBuilder};
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
     * Show selected movie.
     * @param Movie $movie
     * @return View
     */
    public function show(Movie $movie): View
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
