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
    private $fields;


    public function __construct($model, Request $request)
    {
        $this->model = $model;
        $this->query = $this->model->newQuery();

        $this->setFields($request->all());
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
    private function setFields(array $fields)
    {
        $this->fields = $fields;
    }


    /**
     * Set the order by field
     * @since 1.0
     */
    private function setOrderBy()
    {
        $this->orderBy = array_key_exists(config('builder.field_order'), $this->fields) ? $this->fields[config('builder.field_order')] : false;
    }


    /**
     * Set the sort direction
     * @since 1.0
     */
    private function setSort()
    {
        $this->sort = array_key_exists(config('builder.field_sort'), $this->fields) ? $this->fields[config('builder.field_sort')] : '';
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
                if(strpos($field, '__') !== false)
                {
                    $this->addRelatedScope($field, $value);
                }
                else
                {
                    $this->addModelScope($field, $value);
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


    /**
     * Add scope from a related model to the query
     * @param $field
     * @param $value
     */
    private function addRelatedScope($field, $value)
    {
        list($model, $scope) = explode('__', $field);
        $this->query->whereHas($model, function ($query) use($scope, $value) {
            $scopeName = ucwords(config('builder.where_scope')) . ucwords(Str::camel($scope));
            $query->$scopeName($value);
        });
    }


    /**
     * Add scope from this model to the query
     * @param $field
     * @param $value
     */
    private function addModelScope($field, $value)
    {
        $scopeMethod = 'scope' . ucwords(config('builder.where_scope')) . ucwords(Str::camel($field));
        if(method_exists($this->model, $scopeMethod))
        {
            $scopeName = config('builder.where_scope') . $field;
            $this->query->$scopeName($value);
        }
    }


}
