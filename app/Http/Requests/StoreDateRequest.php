<?php

namespace App\Http\Requests;

use App\Patient;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

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
    public function rules(Request $request)
    {
        $patient = Patient::where('id', $request->input('id-exist'))->first();
        if ($patient) {
            return [
                'id-exist' => [
                    'required'
                ]
            ];
        }
        
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
                'unique:patients',
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
