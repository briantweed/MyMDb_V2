<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;


abstract class BaseModel extends Model
{

    /**
     * Scope - sort the query by Id.
     *
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
     * @param string $key
     * @param string $value
     * @param bool $forget
     * @return array
     */
    public function cacheAndReturn(string $key, string$value, bool $forget): array
    {
        if ($forget) {
            Cache::forget($this->getTable());
        }

        return Cache::rememberForever($this->getTable(), function() use($key, $value) {
            $sortKey = 'by' . ucwords($key);
            return $this->$sortKey()
                ->pluck($value, $key)
                ->toArray();
        });
    }

}
