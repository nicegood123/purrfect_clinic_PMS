<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'notes' => 'required',
            'breed_id' => 'required',
            'owner_id' => 'required',
            'is_active' => 'required',
        ];
    }

    public function messages()
    {

        return [
            'required' => 'This field is required.',
            'name.unique' => 'Pet info already exists in the database.',

        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            session()->flash('error', 'Please complete all required fields.');
            session()->flash('errorMessage', 'All fields are required. Please ensure all fields are completed.');
        }
    }
}
