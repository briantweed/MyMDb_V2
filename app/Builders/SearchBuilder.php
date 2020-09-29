<?php

namespace App\Builders;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\{Builder, Model};


/**
 * Class SearchBuilder.
 *
 * @package App\Builders
 * @author briantweed
 * @version 1.0.3
 */
class SearchBuilder
{

    private $model;
    private $query;
    private $fields;
    private $sort;
    private $orderBy;

    // Order by key for GET request
    // e.g. ?name=test&order=asc
    private const ORDER_BY_KEY = 'order';

    // Sort by field key for GET requests
    // e.g. ?name=test&sort=rating
    private const SORT_BY_KEY = 'sort';

    // Keyword used when building model scope names
    // e.g. scopeWhereRating()
    private const WHERE_SCOPE = 'where';

    // Keyword used when building model scope names for ordering
    // e.g. scopeByRating()
    private const SCOPE_BY = 'by';

    // Separator between related model and scope
    // e.g. Person__Fullname => Person::scopeWhereFullname()
    private const TABLE_SEPARATOR = '__';


    /**
     * SearchBuilder constructor.
     *
     * @param Model $model
     * @param Request $request
     */
    public function __construct(Model $model, Request $request)
    {
        $this->model = $model;
        $this->query = $this->model->newQuery();

        $this->setFields($request->all());
        $this->setOrderBy();
        $this->setSort();
    }


    /**
     * Add fields, orderBy and sort direction.
     *
     * @since 1.0.0
     * @return Builder
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
     * Set the orderBy field.
     *
     * @since 1.0.0
     * @since 1.0.3 - private const instead of config/builder
     * @return void
     */
    private function setOrderBy(): void
    {
        $this->orderBy = array_key_exists(self::ORDER_BY_KEY, $this->fields) ? $this->fields[self::ORDER_BY_KEY] : null;
    }


    /**
     * Set the sort direction.
     *
     * @since 1.0.0
     * @since 1.0.3 - private const instead of config/builder
     * @return void
     */
    private function setSort(): void
    {
        $this->sort = array_key_exists(self::SORT_BY_KEY, $this->fields) ? $this->fields[self::SORT_BY_KEY] : null;
    }


    /**
     * Check if each field has a corresponding scope method.
     *
     * @since 1.0.0
     * @since 1.0.1 - check field name for double underscore (related table field)
     * @since 1.0.2 - related table separator added
     * @since 1.0.3 - private const instead of config/builder
     * @return void
     */
    private function addFieldsToQuery(): void
    {
        foreach($this->fields as $field => $value)
        {
            if (isset($value))
            {
                if (strpos($field, self::TABLE_SEPARATOR) !== false) {
                    $this->addRelatedScope($field, $value);
                }
                else {
                    $this->addModelScope($field, $value);
                }
            }
        }
    }


    /**
     * Check if the orderBy has a corresponding scope method.
     *
     * @since 1.0.0
     * @since 1.0.3 - private const instead of config/builder
     * @return void
     */
    private function addOrderByToQuery(): void
    {
        if ($this->sort)
        {
            $scopeMethod = 'scope' . ucwords(self::SCOPE_BY) . ucwords($this->sort);
            if (method_exists($this->model, $scopeMethod))
            {
                $scopeName = self::SCOPE_BY . $this->sort;
                if ($this->orderBy) {
                    $this->query->$scopeName($this->orderBy);
                }
                else {
                    $this->query->$scopeName();
                }
            }
        }
    }


    /**
     * Add scope from a related model.
     *
     * @since 1.0.1
     * @since 1.0.2 - related table separator added
     * @since 1.0.3 - private const instead of config/builder
     * @param string $field
     * @param string $value
     * @return void
     */
    private function addRelatedScope(string $field, string $value): void
    {
        list($model, $scope) = explode(self::TABLE_SEPARATOR, $field);
        $this->query->whereHas($model, function ($query) use($scope, $value) {
            $scopeName = ucwords(self::WHERE_SCOPE) . ucwords(Str::camel($scope));
            $query->$scopeName($value);
        });
    }


    /**
     * Add scope from this model.
     *
     * @since 1.0.1
     * @since 1.0.3 - private const instead of config/builder
     * @param $field
     * @param $value
     * @return void
     */
    private function addModelScope(string $field, string $value): void
    {
        $scopeMethod = 'scope' . ucwords(self::WHERE_SCOPE) . ucwords(Str::camel($field));
        if (method_exists($this->model, $scopeMethod)) {
            $scopeName = self::WHERE_SCOPE . $field;
            $this->query->$scopeName($value);
        }
    }

}
