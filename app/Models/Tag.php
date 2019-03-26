<?php

namespace App\Models;


class Tag extends BaseModel
{

    /**
     * @param $query
     * @param $tag
     * @return mixed
     */
    public function scopeWhereId($query, $tag)
    {
        return $query->where('tags.id', '=', $tag);
    }


    /**
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeByWord($query, $direction = 'asc')
    {
        return $query->orderBy('word', $direction);
    }


    /**
     * @param bool $forget
     * @return array
     */
    public function getTags($forget = false): array
    {
        return $this->cacheAndReturn('id', 'word', $forget);
    }

}
