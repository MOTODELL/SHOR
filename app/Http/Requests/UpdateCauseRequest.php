<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCauseRequest extends FormRequest
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
        $id = $this->route('cause')->id;
        return [
            'code'  => [
                'required',
                'unique:causes,code,'.$id
            ],
            'description' => [
                'required',
                'unique:causes,description,'.$id
            ]
        ];
    }
}
