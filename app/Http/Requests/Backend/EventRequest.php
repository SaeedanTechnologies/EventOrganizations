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
            'start_time'   => ['required', 'date_format:H:i'], 
            'end_time'     => ['required', 'date_format:H:i'], 
            'location'     => ['required', 'string'], 
            'image'        => ['required', 'image'], 
            'price'        => ['required']
        ];
    }
}
