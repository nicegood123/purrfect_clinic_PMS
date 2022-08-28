<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'birthdate' => 'required|date_format:m-d-Y',
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
            session()->flash('alert-error', 'All fields are required. Please ensure all fields are completed.');
        }
    }
}
