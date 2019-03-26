<?php

namespace App\Forms;

use App\Contracts\FormInterface;
use App\Models\{Certificate, Format, Movie, Studio, Tag};


/**
 * Class MovieFilterForm
 *
 * @package App\Forms
 * @author briantweed
 * @version 1.1.0
 * @link config/builder.php
 */
class MovieFilterForm extends BaseForm implements FormInterface
{

    /**
     * Return an array of form fields.
     *
     * @since 1.1.0
     * @return array
     */
    public function fields(): array
    {
        return [
            $this->field('text', 'name', 'Title'),
            $this->field('text', 'released', 'Release Date'),
            $this->field('select', 'rating', 'Rating', (new Movie)->ratings),
            $this->field('select', 'certificate_id', 'Certificate', (new Certificate)->getCertificates()),
            $this->field('select', 'studio_id', 'Studio', (new Studio)->getStudios()),
            $this->field('select', 'format_id', 'Format', (new Format)->getFormats()),
            $this->field('select', 'tags__id', 'Tag', (new Tag)->getTags())
        ];
    }


    /**
     * Return an array of form buttons.
     *
     * @since 1.1.0
     * @return array
     */
    public function buttons(): array
    {
        return [
            $this->button('clear', 'clear', 'btn-secondary mr-2', 'movies.index'),
            $this->button('submit', 'submit', 'btn-success')
        ];
    }

}
