<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * Class Studio.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
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
     * Scope - return the studios that match the selected name.
     *
     * @since version 1.0.0
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeByName($query, $direction = 'asc'): Builder
    {
        return $query->orderBy('name', $direction);
    }


    /**
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getStudios($forget = false): array
    {
        return $this->cacheAndReturn('id', 'name', $forget, 'name');
    }

}
