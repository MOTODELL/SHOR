<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('patient')->id;
        return [
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
                'required',
                "unique:users,curp,$id",
                'size:18'
            ],
            'phone' => [
                'required',
                'size:14'
            ],
            'ssn_type' => [
                'required'
            ],
            'viality' => [
                'required'
            ],
            'street' => [
                'required'
            ],
            'number_ext' => [
                'required'
            ],
            'settlement_type' => [
                'required'
            ],
            'colony' => [
                'required'
            ],
            'zip_code' => [
                'required'
            ],
            'municipality' => [
                'required'
            ],
            'state' => [
                'required'
            ],
        ];
    }
}
