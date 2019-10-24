<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDateRequest extends FormRequest
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
            'street' => [
                'required'
            ],
            'number_ext' => [
                'required'
            ],
            'colony' => [
                'required'
            ],
            'zip_code' => [
                'required'
            ],
            'ssn' => [
                'required'
            ],
            'number' => [
                'required'
            ],
            'ssn_type' => [
                'required'
            ],
            'name' => [
                'required'
            ],
            'paternal_lastname' => [
                'required'
            ],
            'maternal_lastname' => [
                'required'
            ],
            'curp' => [
                'required'
            ],
            'birthdate' => [
                'required'
            ],
            'sex' => [
                'required'
            ],
            'phone' => [
                'required'
            ],
            'birthplace' => [
                'required'
            ],
            'folio' => [
                'required'
            ],
        ];
    }
}
