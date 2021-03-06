<?php

namespace App\Forms;

use App\Contracts\FormInterface;
use App\Models\{Certificate, Format, Genre, Movie, Studio, Tag};


/**
 * Class MovieForm.
 *
 * @package App\Forms
 * @author briantweed
 * @version 1.0.0
 */
class MovieForm extends BaseForm implements FormInterface
{

    /**
     * Return an array of form fields.
     *
     * @since 1.0.0
     * @return array
     */
    protected function fields(): array
    {
        return [
            $this->field('text', 'name', 'Title'),
            $this->field('text', 'sort_name', 'Sort By'),
            $this->field('text', 'running_time', 'Running Time'),
            $this->field('text', 'imdb_id', 'IMDb Code'),
            $this->field('text', 'released', 'Release Date'),
            $this->field('select', 'rating', 'Rating', (new Movie)->ratings),
            $this->field('select', 'certificate_id', 'Certificate', (new Certificate)->getCertificates()),
            $this->field('select', 'studio_id', 'Studio', (new Studio)->getStudios()),
            $this->field('select', 'format_id', 'Format', (new Format)->getFormats()),
            $this->field('textarea', 'bio', 'Description'),
            $this->field('checkbox', 'duplicate', 'Duplicate'),
            $this->field('checkbox', 'genres', 'Genres', (new Genre())->getGenres()),
            $this->field('checkbox', 'tags', 'Tags', (new Tag())->getTags()),
        ];
    }


    /**
     * Return an array of form buttons.
     *
     * @since 1.0.0
     * @return array
     */
    protected function buttons(): array
    {
        return [
            $this->button('cancel', 'cancel', 'btn-secondary mr-2', 'movies.index'),
            $this->button('submit', 'submit', 'btn-success')
        ];
    }

}
