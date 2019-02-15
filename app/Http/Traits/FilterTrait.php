<?php

namespace App\Http\Traits;

trait FilterTrait
{

    public static function applyFilters($request)
    {
        $class = get_class();
        $model = new $class();
        $query = $model->newQuery();

        $filters = $request->all();

        $orderBy = array_key_exists('order', $filters) ? $filters['order'] : false;
        unset($filters['order']);

        $sortBy = array_key_exists('sort', $filters) ? $filters['sort'] : '';
        unset($filters['sort']);

        foreach($filters as $filter => $value)
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

        if($orderBy)
        {
            $scopeMethod = 'scopeBy'.$orderBy;
            if(method_exists($model, $scopeMethod))
            {
                $scopeName = 'by'.$orderBy;
                $query->$scopeName($sortBy);
            }
        }
        return $query;
    }

}