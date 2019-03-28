<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * Class Format.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Format extends BaseModel
{

    /**
     * Relation - a format can belong to many movies.
     *
     * @since version 1.0.0
     * @return HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }


    /**
     * Scope - sort formats by type.
     *
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeByType($query, $direction = 'asc'): Builder
    {
        return $query->orderBy('type', $direction);
    }


    /**
     * Return an array of format types.
     *
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getFormats($forget = false): array
    {
        return $this->cacheAndReturn('id', 'type', $forget);
    }

}
