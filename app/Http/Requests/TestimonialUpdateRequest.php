<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'client_name' => 'required|string|max:255',
            'client_designation' => 'required|string|max:255',
            'client_testimonial' => 'required|string',
            'client_image' => 'nullable|image',
        ];
    }
}
