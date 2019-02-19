<?php

namespace App\Builders;

use App\Contracts\FormInterface;


/**
 * Class FormBuilder
 *
 * Build a form based on the model array attribute.
 * @author Brian Tweed | brtweed@outlook.com
 * @version 1.0
 * @package App\Builders
 * @see config/builder.php
 */
class FormBuilder
{

    private $filters;
    private $view;


    public function __construct(FormInterface $formArray)
    {
        $this->setFilters($formArray);
    }


    /**
     * Render the different parts of the form, add to the view and return the result
     * @return string|null
     */
    public function build(): ?string
    {
        $this->addFieldsToView();
        $this->addButtonsToView();
        return $this->view;
    }


    /**
     * Set the filters variable
     * @param FormInterface $formArray
     */
    private function setFilters(FormInterface $formArray)
    {
        $this->filters = $formArray->data;
    }


    /**
     * Add any fields to the view
     */
    private function addFieldsToView()
    {
        if($this->contains(config('builder.field_group')))
        {
            foreach($this->filters[config('builder.field_group')] as $filter)
            {
                $this->view .= view('forms.fields.'.$filter[config('builder.field_type')], [
                    'filter' => $filter
                ]);
            }
        }
    }


    /**
     * Add any buttons to the view
     */
    private function addButtonsToView()
    {
        if($this->contains(config('builder.button_group')))
        {
            foreach($this->filters[config('builder.button_group')] as $filter)
            {
                $this->view .= view('forms.buttons.'.$filter[config('builder.button_type')], [
                    'filter' => $filter
                ]);
            }
        }
    }


    /**
     * Check if the relevant section is part of the form
     * @param string $key
     * @return bool
     */
    private function contains(string $key): bool
    {
        return array_key_exists($key, $this->filters);
    }

}
