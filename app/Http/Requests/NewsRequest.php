<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|min:2',
            'description' => 'required',
            'image' => 'nullable',
            'external_link' => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

}
