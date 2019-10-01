<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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

        $id = $this->route('user')->id;
        return [
            'name'  => [
                'required'
            ],
            'lastname'  => [
                'required'
            ],
            'email' => [
                'required',
                'email',
                "unique:users,email,$id"
            ],
            'username' => [
                'required',
                "unique:users,username,$id",
                'min:8'
            ],
        ];
    }
}