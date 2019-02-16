<?php

namespace App\Searches;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;


/**
 * Class SearchFilter
 *
 * Take the submitted request fields and check each one to see
 * if it relates to a query scope defined within the model.
 * If a scope if found it is added the the query builder.
 *
 * @author Brian Tweed | brtweed@outlook.com
 * @version 1.0
 * @package App\Searches
 */
class SearchFilter
{

    private const FIELD_PREFIX = 'field';
    private const WHERE_SCOPE = 'scopeWhere';
    private const SORT_SCOPE = 'scopeBy';
    private const WHERE = 'where';
    private const SORT = 'by';

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
        $fields = $this->findInputByType(self::FIELD_PREFIX);

        $fields = $this->removeTypeFromKey(self::FIELD_PREFIX, $fields);

        $this->fields = $fields;
    }


    /**
     * Set the order by field
     * @since 1.0
     */
    private function setOrderBy()
    {
        $this->orderBy = array_key_exists('order', $this->filters) ? $this->filters['order'] : false;
    }


    /**
     * Set the sort direction
     * @since 1.0
     */
    private function setSort()
    {
        $this->sort = array_key_exists('sort', $this->filters) ? $this->filters['sort'] : '';
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
            return preg_replace('/^'.$type.'_/', '', $field);
        }, array_keys($fields)), $fields);
    }


    /**
     * Check if each field has a corresponding Scope in the Model
     * If so, add the Scope to the query
     * @since 1.0
     */
    private function addFieldsToQuery()
    {
        foreach($this->fields as $field => $value)
        {
            if(isset($value))
            {
                $scopeMethod = self::WHERE_SCOPE.$field;
                if(method_exists($this->model, $scopeMethod))
                {
                    $scopeName = self::WHERE.$field;
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
            $scopeMethod = self::SORT_SCOPE.$this->orderBy;
            if(method_exists($this->model, $scopeMethod))
            {
                $scopeName = self::SORT.$this->orderBy;
                $this->query->$scopeName($this->sort);
            }
        }
    }

}
