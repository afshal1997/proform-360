<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8"/>
    <title>
        Invoice
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="all" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/invoice.css')}}" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
@php
    $currency = getSingleField('currencies',['id' => $order->currency_id], 'symbol');
@endphp
<div class="container">
    <div style="page-break-after: always;">
        <h1>
            Invoice #{{ $order->id }}
        </h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td colspan="2">
                    Order Details
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 50%;">
                    <address>
                        <strong>
                            {{ $setting->title }}
                        </strong>
                        <br/>
                        {!! $setting->address !!}
                    </address>
                    <b>
                        Telephone
                    </b>
                    {{ $setting->phone }}
                    <br/>
                    <b>
                        E-Mail
                    </b>
                    {{ $setting->email }}
                    <br/>
                    <b>
                        Web Site:
                    </b>
                    <a href="{{ url('/') }}">
                        {{ url('/') }}
                    </a>
                </td>
                <td style="width: 50%;">
                    <b>
                        Date Added
                    </b>
                    {{ date("Y-m-d",strtotime($order->created_at)) }}
                    <br/>
                    <b>
                        Order ID:
                    </b>
                    {{ $order->id }}
                    <br/>
                    <b>
                        Payment Method
                    </b>
                    {{ $order->payment_method }}
                    <br/>
                    <b>
                        Shipping Method
                    </b>
                    {{ $order->shipping_method }}
                    <br/>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td style="width: 50%;">
                    <b>
                        Payment Address
                    </b>
                </td>
                <td style="width: 50%;">
                    <b>
                        Shipping Address
                    </b>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <address>
                        {!! $order->address !!}
                    </address>
                </td>
                <td>
                    <address>
                        {!! $order->shipping_address !!}
                    </address>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>
                    <b>
                        Product
                    </b>
                </td>
                <td>
                    <b>
                        Model
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        Quantity
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        Unit Price
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        Total
                    </b>
                </td>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderitems as $items)
                <tr>
                    <td>
                        {{$items->product_name." ".json_decode('product_options')}}
                    </td>
                    <td>
                        {{$items->product_id}}
                    </td>
                    <td class="text-right">
                        {{$items->product_qty}}
                    </td>
                    <td class="text-right">
                        {{$items->product_price}}
                    </td>
                    <td class="text-right">
                        {{$items->product_total_price}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="text-right" colspan="4">
                    <b>
                        Sub-Total
                    </b>
                </td>
                <td class="text-right">
                    {{ $currency." ".$order->actual_amount }}
                </td>
            </tr>
            <tr>
                <td class="text-right" colspan="4">
                    <b>
                        Flat Shipping Rate
                    </b>
                </td>
                <td class="text-right">
                    {{ $currency." ".$order->shipping_amount }}
                </td>
            </tr>
            <tr>
                <td class="text-right" colspan="4">
                    <b>
                        Discount Amount
                    </b>
                </td>
                <td class="text-right">
                    {{ $currency." ".$order->discount_amount }}
                </td>
            </tr>
            <tr>
                <td class="text-right" colspan="4">
                    <b>
                        Total
                    </b>
                </td>
                <td class="text-right">
                    {{ $currency." ".$order->total_amount }}
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>
                    <b>
                        Customer Comment
                    </b>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    {{ $order->comment }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
