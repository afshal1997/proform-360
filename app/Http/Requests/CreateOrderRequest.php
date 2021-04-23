<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    final public function rules(): array
    {
        return [
            'customer_first_name' => 'required|string|max:20',
            'customer_last_name' => 'required|string|max:20',
            'customer_email' => 'required|string|email|max:50',
            'customer_phone' => 'required|string|max:50',
            'customer_message' => 'sometimes|string|max:500',
        ];
    }

    final public function authorize(): bool
    {
        return true;
    }
}
