<?php

namespace App\Http\Traits;


trait PositionTrait
{

    public function scopeByPosition($query)
    {
        return $query->orderByRaw(\DB::raw("FIELD(position,". sprintf("'%s'", implode("','", self::CREW_POSITIONS ) ) ." )"));
    }


    public function getPosition(string $position)
    {
        return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
            ->withPivot('id', 'position')
            ->where('position', $position)
            ->orderBy('released', 'desc')
            ->orderBy('name', 'asc');
    }

}
