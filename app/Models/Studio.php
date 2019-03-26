<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;


class Studio extends BaseModel
{

    protected $fillable = [
        'name'
    ];


    /**
     * Relation - a studio can have many movies.
     *
     * @since version 1.0.0
     * @return HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }


    /**
     * @since version 1.0.0
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }


    /**
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getStudios($forget = false)
    {
        return $this->cacheAndReturn('id', 'name', $forget, 'name');
    }

}
