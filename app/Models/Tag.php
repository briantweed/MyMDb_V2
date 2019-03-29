<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;


/**
 * Class Tag.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Tag extends BaseModel
{

    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'word'
    ];


    /**
     * Scope - return tags that match the selected id.
     *
     * @since 1.0.0
     * @param $query
     * @param $tag
     * @return Builder
     */
    public function scopeWhereId(Builder $query, int $tag): Builder
    {
        return $query->where('tags.id', '=', $tag);
    }


    /**
     * Scope - return tags that match the selected word.
     *
     * @since 1.0.0
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByWord(Builder $query, string $direction = 'asc'): Builder
    {
        return $query->orderBy('word', $direction);
    }


    /**
     * Return an array of all the tags.
     *
     * @since 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getTags($forget = false): array
    {
        return $this->cacheAndReturn('id', 'word', $forget);
    }

}
