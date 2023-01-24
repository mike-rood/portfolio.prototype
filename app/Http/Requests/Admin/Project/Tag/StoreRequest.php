<?php

namespace App\Http\Requests\Admin\Project\Tag;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'tag_title' => 'required|string|max:32'
        ];
    }

    public function messages()
    {
        return [
            'tag_title' => [
                'required' => 'Tag title is required',
                'string' => 'Title must be a string',
                'max:32' => '32 chars max',
            ],
        ];
    }
}
