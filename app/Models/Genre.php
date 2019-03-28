<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;


/**
 * Class Genre.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Genre extends BaseModel
{
    
    protected $fillable = [
        'type'
    ];


    /**
     * Relation - a genre can belong to many movies.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class);
    }



    /**
     * Return an array of genres.
     *
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getGenres($forget = false): array
    {
        return $this->cacheAndReturn('id', 'type', $forget);
    }

}
