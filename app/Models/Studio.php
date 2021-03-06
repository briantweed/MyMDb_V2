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

    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
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
     * Scope - sort by the studio name.
     *
     * @since version 1.0.0
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByName(Builder $query, string $direction = 'asc'): Builder
    {
        return $query->orderBy('name', $direction);
    }


    /**
     * Return an array of all studios names
     *
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getStudios($forget = false): array
    {
        return $this->cacheAndReturn('id', 'name', $forget, 'name');
    }

}
