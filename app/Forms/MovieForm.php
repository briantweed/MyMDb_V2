<?php

namespace App\Forms;

use App\Contracts\FormInterface;
use App\Models\{Certificate, Format, Movie, Studio};


/**
 * Class MovieFilterForm
 *
 * @package App/Forms
 * @link config/builder.php
 */
class MovieForm implements FormInterface
{

    /**
     * Return the data array used to build the form.
     *
     * @return array
     */
    public function getData()
    {
        return [
            config('builder.field_group') => [
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "name",
                    config('builder.field_label')   => "Title",
                ],
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "sort_name",
                    config('builder.field_label')   => "Sort By",
                ],
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "running_time",
                    config('builder.field_label')   => "Running Time",
                ],
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "imdb_id",
                    config('builder.field_label')   => "IMDb Code",
                ],
                [
                    config('builder.field_type')    => "text",
                    config('builder.field_name')    => "released",
                    config('builder.field_label')   => "Release Date",
                ],
                [
                    config('builder.field_type')    => "select",
                    config('builder.field_name')    => "rating",
                    config('builder.field_label')   => "Rating",
                    config('builder.field_options') => (new Movie)->ratings
                ],
                [
                    config('builder.field_type')    => "select",
                    config('builder.field_name')    => "certificate_id",
                    config('builder.field_label')   => "Certificate",
                    config('builder.field_options') => (new Certificate)->getCertificates(),
                ],
                [
                    config('builder.field_type')    => "select",
                    config('builder.field_name')    => "studio_id",
                    config('builder.field_label')   => "Studio",
                    config('builder.field_options') => (new Studio)->getStudios(),
                ],
                [
                    config('builder.field_type')    => "select",
                    config('builder.field_name')    => "format_id",
                    config('builder.field_label')   => "Format",
                    config('builder.field_options') => (new Format)->getFormats(),
                ],
                [
                    config('builder.field_type')    => "textarea",
                    config('builder.field_name')    => "bio",
                    config('builder.field_label')   => "Description",
                    config('builder.field_options') => (new Format)->getFormats(),
                ]
            ],
            config('builder.button_group') => [
                [
                    config('builder.button_type')   => "cancel",
                    config('builder.button_text')   => "cancel",
                    config('builder.button_class')  => "btn-secondary mr-2",
                    config('builder.button_route')  => "movies.index"
                ],
                [
                    config('builder.button_type')   => "submit",
                    config('builder.button_text')   => "submit",
                    config('builder.button_class')  => "btn-success",
                ]
            ]
        ];
    }

}
