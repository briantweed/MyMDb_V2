<?php

namespace App\Builders;

use App\Contracts\FormInterface;


/**
 * Class FormBuilder.
 *
 * @package App\Builders
 * @author briantweed
 * @version 1.0
 * @link config/builder.php
 */
class FormBuilder
{

    private $form;
    private $parameters;
    private $view;


    /**
     * FormBuilder constructor.
     *
     * @param FormInterface $form
     * @param null $parameters
     */
    public function __construct(FormInterface $form, $parameters = null)
    {
        $this->setForm($form);
        $this->parameters = $parameters;
    }


    /**
     * Render the different parts of the form, add to the view and return the result.
     *
     * @return string|null
     */
    public function build(): ?string
    {
        $this->addFieldsToView();
        $this->addButtonsToView();
        return $this->view;
    }


    /**
     * Set the filters variable.
     *
     * @param FormInterface $form
     * @return void
     */
    private function setForm(FormInterface $form): void
    {
        $this->form = $form->getData();
    }


    /**
     * Add any fields to the view.
     *
     * @return void
     */
    private function addFieldsToView(): void
    {
        if($this->contains(config('builder.field_group')))
        {
            foreach($this->form[config('builder.field_group')] as $field)
            {

                $field['value'] = $this->checkForFieldValue($field);
                $this->view .= view('forms.fields.'.$field[config('builder.field_type')], [
                    'field' => $field,
                ]);
            }
        }
    }


    /**
     * Add any buttons to the view.
     *
     * @return void
     */
    private function addButtonsToView(): void
    {
        if($this->contains(config('builder.button_group')))
        {
            foreach($this->form[config('builder.button_group')] as $field)
            {
                $this->view .= view('forms.buttons.' . ($field[config('builder.button_type')] ?: 'submit'), [
                    'field' => $field
                ]);
            }
        }
    }


    /**
     * Check if the relevant section is part of the form.
     *
     * @param string $key
     * @return bool
     */
    private function contains(string $key): bool
    {
        return array_key_exists($key, $this->form);
    }


    /**
     * If the parameters have been set, return the value if the field exists
     *
     * @param array $fields
     * @return string
     */
    private function checkForFieldValue(array $fields): string
    {
        if($this->parameters) {
            if(array_key_exists($fields[config('builder.field_name')], $this->parameters))
            {
                return $this->parameters[$fields[config('builder.field_name')]];
            }
        }
        return '';
    }

}
