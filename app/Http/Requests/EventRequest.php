<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|min:2',
            'location' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

}
