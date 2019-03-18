<?php

namespace App\Forms;


/**
 * Class BaseForm.
 *
 * @package App\Forms
 * @author brian tweed
 * @version 1.0.0
 */
abstract class BaseForm
{

    /**
     * Return an array of form fields.
     *
     * @since 1.0.0
     * @return array
     */
    abstract protected function fields(): array;


    /**
     * Return an array of form buttons.
     *
     * @since 1.0.0
     * @return array
     */
    abstract protected function buttons(): array;


    /**
     * Return the data array used to build the form.
     *
     * @since 1.0.0
     * @return array
     */
    public function getData()
    {
        $fields = array_combine([config('builder.field_group')], [$this->fields()]);
        $buttons = array_combine([config('builder.button_group')], [$this->buttons()]);
        return array_merge($fields, $buttons);
    }


    /**
     * Return an array of data describing the field.
     *
     * @since 1.0.0
     * @param string $type
     * @param string $name
     * @param string $label
     * @param array $options
     * @return array
     */
    protected function field(string $type, string $name, string $label, array $options = []): array
    {
        return [
            config('builder.field_type') => $type,
            config('builder.field_name') => $name,
            config('builder.field_label') => $label,
            config('builder.field_options') => $options,
        ];
    }


    /**
     * Return an array of data describing the button.
     *
     * @since 1.0.0
     * @param string $type
     * @param string $text
     * @param string $class
     * @param string $route
     * @return array
     */
    protected function button(string $type, string $text, string $class = '', string $route = ''): array
    {
        return [
            config('builder.button_type') => $type,
            config('builder.button_text') => $text,
            config('builder.button_class') => $class,
            config('builder.button_route') => $route,
        ];
    }

}