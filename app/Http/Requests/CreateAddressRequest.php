<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddressRequest extends FormRequest
{
    final public function rules(): array
    {
        return [
            'address' => 'required|string',
            'appartment_suite' => 'nullable|string',
            'phone' => 'required|string',
            'postcode' => 'required|integer',
            'country_id' => 'required|string',
            'state_id' => 'required|string',
            'city_id' => 'required|string',
            'set_as_active' => 'required|boolean',
        ];
    }
}
