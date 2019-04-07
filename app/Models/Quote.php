<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class Quote.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Quote extends Model
{

    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'text'
    ];


    /**
     * Relation - a genre can belong to many movies.
     *
     * @since version 1.0.0
     * @return BelongsTo
     */
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

}
