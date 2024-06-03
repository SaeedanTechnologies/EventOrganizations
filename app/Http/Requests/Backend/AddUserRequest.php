<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email'    => ['required', 'string', 'email'],
            'password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone'     => ['required']
        ];
    }
}