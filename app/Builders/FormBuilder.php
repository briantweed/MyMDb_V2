<?php

namespace App\Builders;

use Illuminate\Http\Request;
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

    private $form;
    private $model;
    private $view;


    public function __construct(FormInterface $formArray, $parameters = null)
    {
        dd($parameters);
        $this->setForm($formArray);
        $this->parameters = $parameters;
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
    private function setForm(FormInterface $formArray)
    {
        $this->form = $formArray->data;
    }


    /**
     * Add any fields to the view
     */
    private function addFieldsToView()
    {
        if($this->contains(config('builder.field_group')))
        {
            foreach($this->form[config('builder.field_group')] as $field)
            {
                $field['value'] = $this->model ? $this->model->{ $field[config('builder.field_name')] } : '';
                $this->view .= view('forms.fields.'.$field[config('builder.field_type')], [
                    'field' => $field,
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
            foreach($this->form[config('builder.button_group')] as $field)
            {
                $this->view .= view('forms.buttons.'.$field[config('builder.button_type')], [
                    'field' => $field
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
        return array_key_exists($key, $this->form);
    }

}
