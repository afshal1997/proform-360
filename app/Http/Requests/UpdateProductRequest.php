<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    final public function rules(): array
    {
        return [
            'category_id' => 'required|array',
            'category_id.*' => 'required|integer',
            'name' => 'required|string',
            'meta_tag_title' => 'required',
            'currency_id' => 'required|array',
            'currency_id.*' => 'required|integer'
        ];
    }

    final public function authorize(): bool
    {
        return true;
    }

    final public function messages()
    {
        return [
            'category_id.required' => 'Category field is required'
        ];
    }
}
