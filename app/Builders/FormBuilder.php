<?php

namespace App\Builders;

use App\Contracts\FormInterface;


/**
 * Class FormBuilder.
 *
 * @package App\Builders
 * @author briantweed
 * @version 1.0.1
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
        $this->setParameters($parameters);
    }


    /**
     * Set the parameters.
     *
     * @since 1.0.1
     * @param $parameters
     * @return void
     */
    public function setParameters($parameters): void
    {
        $this->parameters = $parameters;
    }


    /**
     * Render the different parts of the form, add to the view and return the result.
     *
     * @since 1.0.0
     * @return string|null
     */
    public function build(): ?string
    {
        $this->addFieldsToView();
        $this->addButtonsToView();
        return $this->view;
    }


    /**
     * Set the form data.
     *
     * @since 1.0.0
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
     * @since 1.0.0
     * @return void
     */
    private function addFieldsToView(): void
    {
        if($this->contains(config('builder.field_group')))
        {
            foreach($this->form[config('builder.field_group')] as $field)
            {

                $field['value'] = $this->checkForFieldValue($field);
                $this->view .= view('forms.fields.'.$field[config('builder.type')], [
                    'field' => $field,
                ]);
            }
        }
    }


    /**
     * Add any buttons to the view.
     *
     * @since 1.0.0
     * @return void
     */
    private function addButtonsToView(): void
    {
        if($this->contains(config('builder.button_group')))
        {
            foreach($this->form[config('builder.button_group')] as $field)
            {
                $this->view .= view('forms.buttons.' . ($field[config('builder.type')] ?: 'submit'), [
                    'field' => $field
                ]);
            }
        }
    }


    /**
     * Check if the relevant section is part of the form.
     *
     * @since 1.0.0
     * @param string $key
     * @return bool
     */
    private function contains(string $key): bool
    {
        return array_key_exists($key, $this->form);
    }


    /**
     * Check if the field has an existing value.
     *
     * @since 1.0.0
     * @since 1.0.1 - will only return a string
     * @param array $fields
     * @return string
     */
    private function checkForFieldValue(array $fields): string
    {
        if($this->parameters) {
            if(array_key_exists($fields[config('builder.name')], $this->parameters))
            {
                return (string) $this->parameters[$fields[config('builder.name')]];
            }
        }
        return '';
    }

}
