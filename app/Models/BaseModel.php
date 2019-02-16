<?php

namespace App\Models;

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

}
