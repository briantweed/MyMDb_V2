<?php

use Illuminate\Support\Str;


if (! function_exists('d')) {
    /**
     * Dump the passed variables and end the script
     * but also expand all child objects and arrays.
     *
     * @param  mixed  $args
     * @return void
     */
    function d(...$args)
    {
        http_response_code(500);

        array_map(function($x) { var_dump($x); }, func_get_args());
    }
}

if (! function_exists('display_string')) {
    /**
     * Convert a value to title case.
     *
     * @param  string  $value
     * @return string
     */
    function display_string($value)
    {
        return Str::title(str_replace(['_', '-'], ' ', $value));
    }

}
