<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'name' => [
                'required'
            ],
            'lastname' => [
                'required'
            ],
            'professional-id' => [
                'required',
                'unique:doctors,professional_id'
            ],
            'phone' => [
                'required',
            ],
            'street' => [
                'required',
            ],
            'colony' => [
                'required',
            ],
            'number' => [
                'required',
            ],
            'consulting-room-name' => [
                'required',
            ],
            'state-code' => [
                'required',
            ],
        ];
    }
}
