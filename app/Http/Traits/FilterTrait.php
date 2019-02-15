<?php

namespace App\Http\Traits;

trait FilterTrait
{

    public static function applyFilters($request)
    {
        $class = get_class();
        $model = new $class();
        $query = $model->newQuery();

        foreach($request->all() as $filter => $value)
        {
            if(isset($value))
            {
                $scopeMethod = 'scopeWhere'.$filter;
                if(method_exists($model, $scopeMethod))
                {
                    $scopeName = 'where'.$filter;
                    $query->$scopeName($value);
                }
            }
        }
        return $query;
    }

}