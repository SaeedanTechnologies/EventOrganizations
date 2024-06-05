<?php

namespace App\Http\Requests\Backend\Organizer;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function rules()
    {
        return [
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
