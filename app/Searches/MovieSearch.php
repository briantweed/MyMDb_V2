<?php

namespace App\Searches;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Movie;


trait MovieSearch
{

    public function applyFilters(Request $filters)
    {
        $query = $this->buildQueryFromFilters($filters, (new Movie)->newQuery());
        return $this->getResults($query);
    }


    private function buildQueryFromFilters(Request $filters, Builder $query)
    {
        foreach($filters->all() as $filter => $value)
        {
            $filterPath = $this->getFilterPath($filter);
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
