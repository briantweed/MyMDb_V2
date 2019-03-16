<?php

namespace App\Builders;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class SearchBuilder.
 *
 * Take the submitted request fields and check each one to see
 * if it relates to a query scope defined within the model.
 * If a scope if found it is added the the query builder.
 *
 * @package App\Builders
 * @author briantweed
 * @version 1.0.0
 * @link config/builder.php
 */
class SearchBuilder
{

    private $model;
    private $query;
    private $orderBy;
    private $sort;
    private $fields;


    /**
     * SearchBuilder constructor.
     *
     * @param $model
     * @param Request $request
     */
    public function __construct($model, Request $request)
    {
        $this->model = $model;
        $this->query = $this->model->newQuery();

        $this->setFields($request->all());
        $this->setOrderBy();
        $this->setSort();
    }


    /**
     * Apply fields, order by and sort direction to the query.
     *
     * @since 1.0.0
     * @return mixed
     */
    public function apply(): Builder
    {
        $this->addFieldsToQuery();
        $this->addOrderByToQuery();
        return $this->query;
    }


    /**
     * Set the filters.
     *
     * @since 1.0.0
     * @param array $fields
     * @return void
     */
    private function setFields(array $fields): void
    {
        $this->fields = $fields;
    }


    /**
     * Set the order by field.
     *
     * @since 1.0.0
     * @return void
     */
    private function setOrderBy(): void
    {
        $this->orderBy = array_key_exists(config('builder.field_order'), $this->fields) ? $this->fields[config('builder.field_order')] : false;
    }


    /**
     * Set the sort direction.
     *
     * @since 1.0.0
     * @return void
     */
    private function setSort(): void
    {
        $this->sort = array_key_exists(config('builder.field_sort'), $this->fields) ? $this->fields[config('builder.field_sort')] : '';
    }


    /**
     * Check if each field has a corresponding scope in the model.
     * If so, add the Scope to the query.
     *
     * @since 1.0.0
     * @return void
     */
    private function addFieldsToQuery(): void
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
     * Check if the orderBy has a corresponding Scope in the Model.
     * Pass the sort direction if it has been set.
     * Add the Scope to the query.
     *
     * @since 1.0.0
     * @return void
     */
    private function addOrderByToQuery(): void
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
     * Add scope from a related model to the query.
     *
     * @param string $field
     * @param string $value
     * @return void
     */
    private function addRelatedScope(string $field, string $value): void
    {
        list($model, $scope) = explode('__', $field);
        $this->query->whereHas($model, function ($query) use($scope, $value) {
            $scopeName = ucwords(config('builder.where_scope')) . ucwords(Str::camel($scope));
            $query->$scopeName($value);
        });
    }


    /**
     * Add scope from this model to the query.
     *
     * @param $field
     * @param $value
     * @return void
     */
    private function addModelScope(string $field, string $value): void
    {
        $scopeMethod = 'scope' . ucwords(config('builder.where_scope')) . ucwords(Str::camel($field));
        if(method_exists($this->model, $scopeMethod))
        {
            $scopeName = config('builder.where_scope') . $field;
            $this->query->$scopeName($value);
        }
    }


}
