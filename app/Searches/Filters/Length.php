<?php

namespace App\Searches\Filters;

use Illuminate\Database\Eloquent\Builder;

use App\Contracts\Filter;


class Length implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('running_time', $value);
    }

}