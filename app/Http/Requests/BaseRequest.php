<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


abstract class BaseRequest extends FormRequest
{

    /**
     * Remove the field prefix and replace the request data.
     */
    protected function removeInputPrefix()
    {
        $fields = $this->all();
        $fields = array_combine(array_map(function($field) {
            return preg_replace('/^[^_]*_/', '', $field);
        }, array_keys($fields)), $fields);
        $this->replace($fields);
    }

}
