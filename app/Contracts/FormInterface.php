<?php

namespace App\Contracts;

/**
 * Interface FormInterface.
 *
 * @package App\Contracts
 * @see config/builder.php
 */
interface FormInterface
{

    /**
     * Return the data array used to build the form.
     *
     * @return array
     */
    public function getData();

}