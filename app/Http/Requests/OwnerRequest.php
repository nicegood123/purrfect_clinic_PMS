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
            'name' => 'required|unique:owners,name,' . request()->route('id'),
            'email' => 'required|email|unique:owners,email,'. request()->route('id'),
            'mobile_number' => 'required|regex:/(9)[0-9]/|size:10',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'is_active' => 'required',

        ];
    }

    public function messages()
    {

        return [
            'required' => 'This field is required.',
            'name.unique' => 'Pet owner info already exists in the database.',

        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            session()->flash('error', 'Owner not  saved. Please check and complete all required fields.');
            session()->flash('errorMessage', 'All fields are required. Please ensure all fields are completed.');
        }
    }
}
