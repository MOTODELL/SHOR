<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

use function App\Http\isValidUuid;

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
<<<<<<< HEAD
        if (isValidUuid($this->route('user'))) {
            $user = User::where('id', $this->route('user'))->first();
    
            if ($user) {
                $id = User::where('id', $this->route('user'))->first()->id;
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
                        "unique:users,email,$id"
                    ],
                    'curp' => [
                        'required',
                        "unique:users,curp,$id",
                        'size:18'
                    ],
                    'phone' => [
                        'required',
                        'size:14'
                    ]
                ];
            }
        }
        return [];
=======
        $id = $this->route('user')->id;
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
                "unique:users,email,$id"
            ],
            'curp' => [
                'required',
                "unique:users,curp,$id",
                'size:18'
            ],
            'phone' => [
                'required',
                'size:14'
            ]
        ];
>>>>>>> f56e6e933e60899dda79146b562ecdde2164369d
    }
}
