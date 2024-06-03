<?php

namespace App\Http\Requests\Backend\Organizer;

use Illuminate\Foundation\Http\FormRequest;

class SpecialOfferRequest extends FormRequest
{
    public function rules()
    {
        return [
            'event_id'             => ['required', 'integer'], 
            'title'                => ['required', 'string'],
            'description'          => ['nullable', 'string'],
            'start_date'           => ['required', 'date'],
            'end_date'             => ['required', 'date', 'after_or_equal:start_date'], 
            'discount_percentage'  => ['required', 'numeric', 'min:0', 'max:100'], 
        ];
    }
}
