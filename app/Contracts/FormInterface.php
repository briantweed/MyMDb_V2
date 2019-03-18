<?php

namespace App\Contracts;

/**
 * Interface FormInterface.
 *
 * @package App\Contracts
 * @author briantweed
 * @version 1.0.0
 * @link config/builder.php
 */
interface FormInterface
{

    /**
     * Return the data array used to build the form.
     *
     * @since 1.0.0
     * @return array
     */
    public function getData();

}