<?php

namespace App\Searches;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


trait MovieSearch
{

    public function applyFilters(Request $filters)
    {
        $query = $this->buildQueryFromFilters($filters, (new Movie)->newQuery());
        echo $query->toSql();
        return $this->getResults($query);
    }


    private function buildQueryFromFilters(Request $filters, Builder $query)
    {
        foreach($filters->all() as $filter => $value)
        {
            $filterPath = $this->getFilterPath($filter);
            echo $filterPath;
            if($this->isExistingFilter($filterPath))
            {
                $query = $filterPath::apply($query, $value);
            }
        }
        return $query;
    }


    private function isExistingFilter($filterPath)
    {
        return class_exists($filterPath);
    }


    private function getFilterPath($filter)
    {
        return __NAMESPACE__ . '\\Filters\\' . str_replace(' ', '', ucwords(str_replace('_', ' ', $filter)));
    }


    private function getResults($query)
    {
        return $query->get();
    }

}
