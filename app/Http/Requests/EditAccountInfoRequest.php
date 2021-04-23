<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAccountInfoRequest extends FormRequest
{
    final public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'password' => 'required|string|min:8',
        ];
    }
}
