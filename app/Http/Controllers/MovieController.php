<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\{JsonResponse, RedirectResponse, Request};

use App\Models\Movie;
use App\Builders\SearchBuilder;
use App\Http\Requests\MovieRequest;


/**
 * Class MovieController.
 *
 * REST API for handling movie data requests.
 *
 * @package App\Http\Controllers
 * @version 1.0.1
 * @author briantweed
 *
 * @see MovieViewController - for view display related data
 * @see MovieRequest - for movie request validation
 * @see SearchBuilder - for how the search filters are applied
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
     * @param Request $request
     * @uses SearchBuilder::apply()
     * @since version 1.0.0
     * @since version 1.0.1 - SearchBuilder added
     * @return JsonResponse|View
     */
    public function index(Request $request)
    {
        $movies = (new SearchBuilder(new Movie, $request))->apply()
            ->bySortName()
            ->paginate();
        return $this->baseResponse('pages.movies.index', [
            'movies' => $movies
        ]);
    }


    /**
     * Show the selected movie.
     *
     * @since version 1.0.0
     * @param Movie $movie
     * @return JsonResponse|View
     */
    public function show(Movie $movie)
    {
        return $this->baseResponse('pages.movies.show', [
            'movie' => $movie
        ]);
    }


    /**
     * Display the form to create a new movie.
     *
     * @since version 1.0.0
     * @return JsonResponse|View
     */
    public function create()
    {
        return $this->baseResponse('pages.movies.create');
    }


    /**
     * Store the validated data and display the new movie.
     *
     * @since version 1.0.0
     * @param MovieRequest $request
     * @return RedirectResponse
     */
    public function store(MovieRequest $request): RedirectResponse
    {
        $movie = new Movie;
        $movie->fill($request->all())->save();
        return redirect()->route('movies.show', $movie);
    }


    /**
     * Display the form to edit an existing movie.
     *
     * @since version 1.0.0
     * @param Movie $movie
     * @return JsonResponse|View
     */
    public function edit(Movie $movie)
    {
        return $this->baseResponse('pages.movies.edit', [
            'movie' => $movie
        ]);
    }


    /**
     * Update the existing movie with the validated data.
     *
     * @since version 1.0.0
     * @param MovieRequest $request
     * @param Movie $movie
     * @return RedirectResponse
     */
    public function update(MovieRequest $request, Movie $movie): RedirectResponse
    {
        $movie->fill($request->all())->update();
        $movie->genres()->sync($request->genres);
        $movie->tags()->sync($request->tags);
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
