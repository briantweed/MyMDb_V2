<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;


class MovieController extends Controller
{

    public function __construct()
    {
        //
    }


    public function index()
    {
        $movies = Movie::bySortName()->paginate(20);
        return view('welcome', [
            'movies' => $movies
        ]);
    }


    public function show($id)
    {
        //
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
