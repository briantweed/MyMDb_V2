<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;
use App\Models\Movie;


trait PositionTrait
{

    /**
     * Scope - return cast members with the chosen position.
     *
     * @since version 1.0.0
     * @param $query
     * @return mixed
     */
    public function scopeByPosition($query)
    {
        return $query->orderByRaw(DB::raw("FIELD(position,". sprintf("'%s'", implode("','", self::CREW_POSITIONS ) ) ." )"));
    }


    /**
     * Filter the model relation by the chosen cast position
     *
     * @since version 1.0.0
     * @param string $position
     * @return mixed
     */
    public function getPosition(string $position)
    {
        return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
            ->withPivot('id', 'position')
            ->where('position', $position)
            ->orderBy('released', 'desc')
            ->orderBy('name', 'asc');
    }

}
