<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'email' => 'required|email|unique:owners',
            'mobile_number' => 'required|regex:/(9)[0-9]/|size:10',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',

        ];
    }

    public function messages()
    {

        return [
            'required' => 'This field is required.',
            'errorMessage' => 'TGEfawef',

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
