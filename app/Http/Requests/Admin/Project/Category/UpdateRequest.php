<?php

namespace App\Http\Requests\Admin\Project\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'category_title' => 'required|string|max:255',
            'category_description' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'category_title' => [
                'required' => 'The field is required',
                'string' => 'The field must be a string',
                'max:255' => 'The field must be less 256 chars',
            ],
            'category_description' => [
                'string' => 'The field must be a string',
            ],
        ];
    }
}
