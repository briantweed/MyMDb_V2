<?php

namespace App\Builders;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class SearchBuilder
 *
 * Take the submitted request fields and check each one to see
 * if it relates to a query scope defined within the model.
 * If a scope if found it is added the the query builder.
 *
 * @author Brian Tweed | brtweed@outlook.com
 * @version 1.0
 * @package App\Builders
 * @see config/builder.php
 *
 */
class SearchBuilder
{

    private $model;
    private $query;
    private $orderBy;
    private $sort;
    private $filters;
    private $fields;


    public function __construct($model, Request $request)
    {
        $this->model = $model;
        $this->query = $this->model->newQuery();

        $this->setFilters($request->all());
        $this->setFields();
        $this->setOrderBy();
        $this->setSort();
    }


    /**
     * Apply fields, order by and sort direction to the query
     * @since 1.0
     * @return mixed
     */
    public function apply(): Builder
    {
        $this->addFieldsToQuery();
        $this->addOrderByToQuery();
        return $this->query;
    }


    /**
     * Set the filters
     * @since 1.0
     * @param array $filters
     */
    private function setFilters(array $filters)
    {
        $this->filters = $filters;
    }


    /**
     * Find the relevant fields then format the key values
     * @since 1.0
     */
    private function setFields()
    {
        $fields = $this->findInputByType(config('builder.field_prefix'));
        $fields = $this->removeTypeFromKey(config('builder.field_prefix'), $fields);
        $this->fields = $fields;
    }


    /**
     * Set the order by field
     * @since 1.0
     */
    private function setOrderBy()
    {
        $this->orderBy = array_key_exists(config('builder.field_order'), $this->filters) ? $this->filters[config('builder.field_order')] : false;
    }


    /**
     * Set the sort direction
     * @since 1.0
     */
    private function setSort()
    {
        $this->sort = array_key_exists(config('builder.field_sort'), $this->filters) ? $this->filters[config('builder.field_sort')] : '';
    }


    /**
     * Find the fields whose name has the relevant prefix and return the array
     * @since 1.0
     * @param string $type
     * @return array
     */
    private function findInputByType(string $type): array
    {
        return array_filter($this->filters, function($key) use ($type) {
            return strpos($key, $type.'_') === 0;
        }, ARRAY_FILTER_USE_KEY);
    }


    /**
     * Remove the prefix from all the keys and return the formatted array
     * @since 1.0
     * @param string $type
     * @param array $fields
     * @return array|false
     */
    private function removeTypeFromKey(string $type, array $fields): array
    {
        return array_combine(array_map(function($field) use ($type) {
            return preg_replace('/^' . $type . '_/', '', $field);
        }, array_keys($fields)), $fields);
    }


    /**
     * Check if each field has a corresponding scope in the model
     * If so, add the Scope to the query
     * @since 1.0
     */
    private function addFieldsToQuery()
    {
        foreach($this->fields as $field => $value)
        {
            if(isset($value))
            {
                $scopeMethod = 'scope' . ucwords(config('builder.where_scope')) . Str::camel($field);
                if(method_exists($this->model, $scopeMethod))
                {
                    $scopeName = config('builder.where_scope') . $field;
                    $this->query->$scopeName($value);
                }
            }
        }
    }


    /**
     * Check if the orderBy has a corresponding Scope in the Model
     * Pass the sort direction if it has been set
     * Add the Scope to the query
     * @since 1.0
     */
    private function addOrderByToQuery()
    {
        if($this->orderBy)
        {
            $scopeMethod = 'scope' . ucwords(config('builder.sort_scope')) . $this->orderBy;
            if(method_exists($this->model, $scopeMethod))
            {
                $scopeName = config('builder.sort_scope') . $this->orderBy;
                $this->query->$scopeName($this->sort);
            }
        }
    }

}
