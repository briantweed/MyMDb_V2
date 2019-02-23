<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;


class PersonController extends BaseController
{

    public function __construct()
    {
        //
    }


    public function index()
    {
        $people = Person::byForename()->bySurname()->paginate();
        return view('pages.people.index', [
            'people' => $people
        ]);
    }


    public function show(Person $person)
    {
        return view('pages.people.show', [
            'person' => $person
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


    public function edit(Person $people)
    {
        //
    }


    public function update(Request $request, Person $person)
    {
        //
    }


    public function delete(Person $person)
    {
        //
    }


    public function destroy(Person $person)
    {
        //
    }
}
