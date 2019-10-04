<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConsultingRoomRequest extends FormRequest
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
        $id = $this->route('consulting-room')->id;
        return [
            'description' => [
                'required',
                'unique:consulting_rooms,description,'.$id
            ],
            'shift' => [
                'required'
            ],
        ];
    }
}
