<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Builders\{FormBuilder, SearchBuilder};
use App\Models\Movie;

class MovieController extends BaseController
{

    private $movie;


    public function __construct()
    {
        $this->movie = new Movie;
    }


    /**
     * Display all movies
     * @see FilterFormBuilder::build()
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $movies = Movie::bySortName()->paginate();
        return view('pages.movies.index', [
            'movies' => $movies,
            'filters' => (new FormBuilder($this->movie->filters))->build()
        ]);
    }


    /**
     * Display filtered movie results
     * @see SearchBuilder::apply()
     * @see FilterFormBuilder::build()
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function filter(Request $request)
    {
        $movies = (new SearchBuilder($this->movie, $request))->apply()
            ->bySortName()
            ->paginate();

        return view('pages.movies.index', [
            'movies' => $movies,
            'filters' => (new FormBuilder($this->movie->filters))->build()
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
