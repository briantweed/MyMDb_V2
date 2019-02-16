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

        $fields = $model::getFilterFields($filters, $model);

        $orderBy = array_key_exists('order', $filters) ? $filters['order'] : false;
        unset($filters['order']);

        $sortBy = array_key_exists('sort', $filters) ? $filters['sort'] : '';
        unset($filters['sort']);

        foreach($fields as $field => $value)
        {
            if(isset($value))
            {
                $scopeMethod = 'scopeWhere'.$field;
                if(method_exists($model, $scopeMethod))
                {
                    $scopeName = 'where'.$field;
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


    public static function getFilterFields($filters, $model)
    {
        $filters = $model::findInputByType(self::FIELD_PREFIX, $filters);

        $filters = $model::removeTypeFromKey(self::FIELD_PREFIX, $filters);

        return $filters;
    }


    public static function findInputByType($type, $filters)
    {
        return array_filter($filters, function($key) use ($type) {
            return strpos($key, $type.'_') === 0;
        }, ARRAY_FILTER_USE_KEY);
    }


    public static function removeTypeFromKey($type, $filters)
    {
        return array_combine(array_map(function($field) use ($type) {
            return preg_replace('/^'.$type.'_/', '', $field);
        }, array_keys($filters)), $filters);
    }

}