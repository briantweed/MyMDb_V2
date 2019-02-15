<?php

namespace App\Http\Controllers\Filters;

use Illuminate\Database\Eloquent\Builder;

use App\Contracts\Filter;


class Format implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('released', $value);
    }

}
