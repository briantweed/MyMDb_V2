<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class BaseModel.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
abstract class BaseModel extends Model
{

    /**
     * Scope - sort the query by id.
     *
     * @since version 1.0.0
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeById(Builder $query, string $direction = 'asc')
    {
        return $query->orderBy('id', $direction);
    }


    /**
     * Cache and return the key:value pair.
     *
     * @since version 1.0.0
     * @param string $key
     * @param string $value
     * @param bool $forget
     * @param string $sort
     * @return array
     */
    public function cacheAndReturn(string $key, string $value, bool $forget , string $sort = 'id'): array
    {
        if ($forget) {
            Cache::forget($this->getTable());
        }

        return Cache::rememberForever($this->getTable(), function() use($key, $value, $sort) {
            $sortScope = 'by' . ucwords($sort);
            return $this->$sortScope()
                ->pluck($value, $key)
                ->toArray();
        });
    }

}
