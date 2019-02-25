<?php

namespace App\Http\Requests;


class MovieRequest extends BaseRequest
{

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Make changes to the request before validation takes place.
     */
    public function prepareForValidation()
    {
        $this->removeInputPrefix();
    }


    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
        ];
    }


    /**
     * Get the messages that apply to the rules
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Title is required',
            'name.string' => 'Title must be a string',
        ];
    }

}
