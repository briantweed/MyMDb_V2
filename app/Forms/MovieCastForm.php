<?php

namespace App\Forms;

use App\Models\{Person};
use App\Contracts\FormInterface;


/**
 * Class MovieCastForm
 * @see config/builder.php
 * @package App\Forms
 */
class MovieCastForm implements FormInterface
{

    public $data;


    /**
     * MovieCastForm constructor.
     */
    public function __construct()
    {
        $this->data = $this->getArray();
    }


    /**
     * Return the data array used to build the form.
     * @return array
     */
    public function getArray()
    {
        return [
            config('builder.field_group') => [
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "character",
                    config('builder.field_label')   => "Character",
                ],
                [
                    config('builder.field_type')    => "select",
                    config('builder.field_name')    => "person_id",
                    config('builder.field_label')   => "Actor",
                    config('builder.field_options') => (new Person)->getPeople()
                ]
            ],
            config('builder.button_group') => [
                [
                    config('builder.button_type')   => "",
                    config('builder.button_text')   => "",
                    config('builder.button_class')  => "",
                    config('builder.button_route')  => ""
                ]
            ]
        ];
    }

}