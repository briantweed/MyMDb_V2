<?php

namespace App\Builders;

use App\Contracts\FormInterface;


/**
 * Class FormBuilder.
 *
 * @package App\Builders
 * @author briantweed
 * @version 1.0.2
 * @link config/builder.php
 */
class FormBuilder
{

    private $form;
    private $parameters;
    private $fields;
    private $buttons;


    /**
     * FormBuilder constructor.
     *
     * @param FormInterface $form
     * @param $parameters
     */
    public function __construct(FormInterface $form, $parameters = null)
    {
        $this->setForm($form);
        $this->setParameters($parameters);
    }


    /**
     * Render the different parts of the form, add to the view and return the result.
     *
     * @since 1.0.0
     * @return string|null
     */
    public function build(): ?string
    {
        return $this->getFields() . $this->getButtons();
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
     * Add any fields to the view.
     *
     * @since 1.0.0
     * @since 1.0.2 - method was made public
     * @return string
     */
    public function getFields(): string
    {
        if($this->contains(config('builder.field_group')))
        {
            $this->fields .= "<div class='mb-4'>";
            foreach($this->form[config('builder.field_group')] as $field)
            {
                $field['value'] = $this->checkForFieldValue($field);
                $this->fields .= view('forms.fields.'.$field[config('builder.type')], [
                    'field' => $field,
                ]);
            }
            $this->fields .= "</div>";
        }
        return $this->fields;
    }


    /**
     * Add any buttons to the view.
     *
     * @since 1.0.0
     * @since 1.0.2 - method was made public
     * @return string
     */
    public function getButtons(): string
    {
        if($this->contains(config('builder.button_group')))
        {
            foreach($this->form[config('builder.button_group')] as $field)
            {
                $this->buttons .= view('forms.buttons.' . ($field[config('builder.type')] ?: 'submit'), [
                    'field' => $field
                ]);
            }
        }
        return $this->buttons;
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
     * @param array $fields
     * @return mixed
     */
    private function checkForFieldValue(array $fields)
    {
        if($this->parameters) {
            if(array_key_exists($fields[config('builder.name')], $this->parameters))
            {
                return $this->parameters[$fields[config('builder.name')]];
            }
        }
        return '';
    }

}
