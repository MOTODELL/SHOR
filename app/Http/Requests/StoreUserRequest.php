<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'  => [
                'required'
            ],
            'paternal_lastname'  => [
                'required'
            ],
            'maternal_lastname'  => [
                'required'
            ],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'curp' => [
                'required',
                'unique:users',
                'size:18'
            ],
            'phone' => [
                'required',
                'size:14'
            ],
            'username' => [
                'required',
                'unique:users',
                'min:8'
            ],
            'password' => [
                'required',
                'confirmed',
                'min:8'
            ],
        ];
    }
}
