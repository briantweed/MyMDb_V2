<?php

namespace App\Builders;


/**
 * Class FormBuilder
 *
 * Build a form based on the model array attribute.
 * @author Brian Tweed | brtweed@outlook.com
 * @version 1.0
 * @package App\Builders
 * @see config/building.php
 */
class FormBuilder
{

    private $filters;
    private $view;


    public function __construct(?array $filters = [])
    {
        $this->setFilters($filters);
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
     * @param array|null $filters
     */
    private function setFilters(?array $filters = [])
    {
        $this->filters = $filters ?? [];
    }


    /**
     * Add any fields to the view
     */
    private function addFieldsToView()
    {
        if($this->contains(config('building.field_group')))
        {
            foreach($this->filters[config('building.field_group')] as $filter)
            {
                $this->view .= view('forms.fields.'.$filter[config('building.field_type')], [
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
        if($this->contains(config('building.button_group')))
        {
            foreach($this->filters[config('building.button_group')] as $filter)
            {
                $this->view .= view('forms.buttons.'.$filter[config('building.button_type')], [
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
