<?php

namespace App\Contracts;

/**
 * Interface FormInterface
 * @package App\Contracts
 * @see config/builder.php
 */
interface FormInterface
{

    /**
     * FormInterface constructor.
     */
    public function __construct();

    /**
     * Return the data array used to build the form
     * @return array
     */
    public function getArray();

}