<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Models\Package;
use App\User;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function createOrder(Package $package, CreateOrderRequest $request)
    {
        $data = $request->validated();
        [$customer_browser, $customer_ip] = [$request->userAgent(), $request->ip()];
        $locationData = Http::get('http://www.geoplugin.net/json.gp?ip=' . $customer_ip)->json();
        dd($locationData);
    }
}
