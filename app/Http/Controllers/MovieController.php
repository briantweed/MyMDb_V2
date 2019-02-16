<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new Movie;
    }


    public function index()
    {
        $movies = Movie::bySortName()->paginate();
        return view('pages.movies.index', [
            'movies' => $movies,
            'filters' => $this->model->getSearchables()
        ]);
    }


    public function filter(Request $request)
    {
        $movies = Movie::applyFilters($request)->paginate();
        return view('pages.movies.index', [
            'movies' => $movies,
            'filters' => $this->model->getSearchables()
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
