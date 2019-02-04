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
        $movie = Movie::find(1);
        $person = Person::find(1);
        return view('welcome', [
            'movie' => $movie,
            'person' => $person
        ]);

    }
}
