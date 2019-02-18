<?php

namespace App\Forms;

use App\Models\Movie;
use App\Models\Studio;
use App\Models\Format;
use App\Models\Certificate;
use App\Contracts\FormArray;

class MovieFilterForm implements FormArray
{

    public $data;


    public function __construct()
    {
        $this->data = $this->getArray();
    }


    public function getArray()
    {
        return [
            config('building.field_group') => [
                [
                    config('building.field_type')    => "text",
                    config('building.field_name')    => "name",
                    config('building.field_label')   => "Title",
                ],
                [
                    config('building.field_type')    => "text",
                    config('building.field_name')    => "released",
                    config('building.field_label')   => "Release Date",
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "rating",
                    config('building.field_label')   => "Rating",
                    config('building.field_options') => (new Movie)->ratings
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "certificate",
                    config('building.field_label')   => "Certificate",
                    config('building.field_options') => (new Certificate)->getCertificates(),
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "studio",
                    config('building.field_label')   => "Studio",
                    config('building.field_options') => (new Studio)->getStudios(),
                ]
            ],
            config('building.button_group') => [
                [
                    config('building.button_type')   => "clear",
                    config('building.button_text')   => "clear",
                    config('building.button_class')  => "btn-secondary mr-2",
                    config('building.button_route')  => "movies.index"
                ],
                [
                    config('building.button_type')   => "submit",
                    config('building.button_text')   => "submit",
                    config('building.button_class')  => "btn-success",
                ]
            ]
        ];
    }

}