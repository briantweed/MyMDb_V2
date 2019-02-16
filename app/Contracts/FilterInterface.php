<?php

namespace App\Contracts;


interface FilterInterface
{

    public const FIELD_PREFIX = 'field';

    public static function applyFilters($request);

}
