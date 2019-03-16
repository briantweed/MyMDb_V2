<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\{RedirectResponse, Request};

use App\Models\Movie;
use App\Builders\SearchBuilder;
use App\Http\Requests\MovieRequest;


/**
 * Class MovieController.
 *
 * RESTful API for dealing with movies.
 *
 * @package App\Http\Controllers
 * @version 1.0.0
 * @author briantweed
 *
 * @see MovieServiceProvider - for anything related to view display
 * @see MovieRequest - for movie request validation
 * @see SearchBuilder -
 *
 */
class MovieController extends BaseController
{

    /**
     * MovieController constructor.
     */
    public function __construct()
    {
        //
    }


    /**
     * Apply any search filters and return the results.
     *
     * @since version 1.0.0
     * @uses SearchBuilder::apply()
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $movies = (new SearchBuilder(new Movie, $request))->apply()
            ->bySortName()
            ->paginate();
        return view('pages.movies.index', [
            'movies' => $movies,
        ]);
    }


    /**
     * Show the selected movie.
     *
     * @since version 1.0.0
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
     *
     * @since version 1.0.0
     * @return View
     */
    public function create(): View
    {
        return view('pages.movies.create');
    }


    /**
     * Store the validated data and display the new movie.
     *
     * @since version 1.0.0
     * @param MovieRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MovieRequest $request): RedirectResponse
    {
        $movie = (new Movie)->fill($request->all())->save();
        return redirect()->route('movies.show', $movie);
    }


    /**
     * Display the form to edit an existing movie.
     *
     * @since version 1.0.0
     * @param Movie $movie
     * @return View
     */
    public function edit(Movie $movie): View
    {
        return view('pages.movies.edit', [
            'movie' => $movie
        ]);
    }


    /**
     * Update the existing movie with any changes to the validated data.
     *
     * @since version 1.0.0
     * @param MovieRequest $request
     * @param Movie $movie
     * @return RedirectResponse
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->fill($request->all())->update();
        return redirect()->route('movies.edit', $movie);
    }


    /**
     * @todo Display the confirmation modal to verify the deletion of the selected movie.
     */
    public function delete($id)
    {
        //
    }


    /**
     * @todo Delete the selected movie
     */
    public function destroy($id)
    {
        //
    }

}
