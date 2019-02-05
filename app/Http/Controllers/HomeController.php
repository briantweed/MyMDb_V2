<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Person, Movie};

class HomeController extends Controller
{

    public function __construct()
    {
        
    }

   
    public function index()
    {
        $movies = Movie::bySortName()->paginate(20);
        return view('welcome', [
            'movies' => $movies
        ]);

    }
}
