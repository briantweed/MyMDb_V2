<?php

namespace App\Observers;

use App\Models\Person;
use Illuminate\Support\Str;

class PersonObserver
{

    /**
     * Apply method when a new movie is being created
     * @param Person $person
     */
    public function creating(Person $person)
    {
        $person->slug = Str::slug($person->fullname);
    }


    /**
     * Apply method when a movie is being updated
     * @param Person $person
     */
    public function updating(Person $person)
    {
        if($person->isDirty('forename') || $person->isDirty('surname')) {
            $person->slug = Str::slug($person->fullname);
        }
    }

}
