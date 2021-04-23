<?php

namespace App\Http\Requests;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
{
    final public function rules(): array
    {
        return [
            'email' => 'required|string|email',

            // Billing Details
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'appartment' => 'nullable|string',
            'phone' => 'required|numeric',
            'postcode' => 'required|integer',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',

            'same_shipping_and_billing' => 'required|boolean',

            // Shipping Details
            'shipping_firstname' => 'required_if:same_shipping_and_billing,0|nullable|string',
            'shipping_lastname' => 'required_if:same_shipping_and_billing,0|nullable|string',
            'shipping_address' => 'required_if:same_shipping_and_billing,0|nullable|string',
            'shipping_appartment' => 'nullable|string',
            'shipping_phone' => 'required_if:same_shipping_and_billing,0|nullable|numeric',
            'shipping_postcode' => 'required_if:same_shipping_and_billing,0|nullable|integer',
            'shipping_country' => 'required_if:same_shipping_and_billing,0|nullable|string',
            'shipping_state' => 'required_if:same_shipping_and_billing,0|nullable|string',
            'shipping_city' => 'required_if:same_shipping_and_billing,0|nullable|string',

            'payment_method' => ['required', 'string', Rule::in(Order::PAYMENT_METHODS)],
            'shipping_method' => ['required', 'string', Rule::in(Order::SHIPPING_METHODS)],
        ];
    }
}
