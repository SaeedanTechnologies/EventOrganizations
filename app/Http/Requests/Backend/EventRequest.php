<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function rules()
    {
        return [
            'organizer_id' => ['required', 'exists:users,id'], 
            'title'        => ['required', 'string'], 
            'description'  => ['required', 'string'], 
            'date'         => ['required', 'date'], 
            'time'         => ['required', 'date_format:H:i'], 
            'location'     => ['required', 'string'], 
            'image'        => ['required', 'image'], 
        ];
    }
}
