<?php

namespace App\Http\Requests;


class MovieRequest extends BaseRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
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
        // $input = $this->all();

        // $input['field'] = filter_var(trim($input['field']), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

        // $this->replace($input);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'sort_name' => 'string',
            'imdb_id' => 'nullable|string',
            'released' => 'required|digits:4',
            'rating' => 'required|min:1|max:10',
            'running_time' => 'required|integer',
            'image' => 'mimes:jpeg,png',
            'certificate_id' => 'required|digits:1',
            'format_id' => 'required|digits:1',
            'studio_id' => 'required|integer',
            'bio' => 'string',
            'genres.*' => 'integer',
            'tags.*' => 'integer'
        ];
    }


    /**
     * Get the messages that apply to the rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Title is required',
            'name.string' => 'Title must be a string',
            'sort_name.string' => 'Sort By must be a string',
            'imdb_id.string' => 'IMDb Code must be a string',
            'released.required' => 'Release Date is required',
            'released.digits' => 'Release Date must be a valid year',
            'rating.required' => 'Rating is required',
            'rating.min' => 'Rating must be greater than or equal to 1',
            'rating.max' => 'Rating must be less than or equal to 10',
            'running_time.integer' => 'Running Time must a number',
            'image.mimes' => ' Invalid image type',
            'certificate_id.required' => 'Certificate is required',
            'certificate_id.digits' => 'Incorrect Certificate value selected',
            'format_id.required' => 'Format is required',
            'format_id.digits' => 'Incorrect Format value selected',
            'studio_id.required' => 'Format is required',
            'studio_id.integer' => 'Incorrect Studio value selected',
            'bio.string' => 'Description value must be a string',
            'genres.*.integer' => 'Stop changing the values',
            'tags.*.integer' => 'Stop changing the values'
        ];
    }

}
