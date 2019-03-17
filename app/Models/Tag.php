<?php

namespace App\Models;


class Tag extends BaseModel
{

    public function scopeWhereWord($query, $tag)
    {
        return $query->where('word', '=', $tag);
    }


    public function scopeByWord($query, $direction = 'asc')
    {
        return $query->orderBy('word', $direction);
    }


    public function getTags($forget = false)
    {
        return $this->cacheAndReturn('word', 'word', $forget);
    }

}
