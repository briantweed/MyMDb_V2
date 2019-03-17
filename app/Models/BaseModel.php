<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;


abstract class BaseModel extends Model
{

    /**
     * Scope - sort the query by Id
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeById($query, string $direction = 'asc')
    {
        return $query->orderBy('id', $direction);
    }


    /**
     * Cache and return the key:value pair.
     *
     * @param $key
     * @param $value
     * @param $forget
     * @return mixed
     */
    public function cacheAndReturn($key, $value, $forget)
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
