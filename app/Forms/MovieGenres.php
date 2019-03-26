<?php

namespace App\Forms;

use App\Contracts\FormInterface;
use App\Models\Genre;


/**
 * Class MovieGenres
 *
 * @package App\Forms
 * @author briantweed
 * @version 1.1.0
 */
class MovieGenres extends BaseForm implements FormInterface
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
            $this->field('checkbox', 'genres', 'Genres', (new Genre())->getGenres()),
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
            // example: $this->button(string $type, string $text, string $class = '', string $route = ''),
        ];
    }

}
