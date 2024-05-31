<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email'    => ['required', 'string', 'email'],
            'password' => ['required'],
        ];
    }
}
