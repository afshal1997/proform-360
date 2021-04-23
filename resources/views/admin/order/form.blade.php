@extends('admin.layout.webapp')
@section('page_css')
    <!-- iCheck -->
    <link href="{{ asset('assets/admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('order.update',$order->id) }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PATCH')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="first_name">{{ ucwords(str_replace('_',' ','first_name')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="first_name" class="form-control  @error('first_name') is-invalid @enderror" name="first_name"
                                               value="{{ !empty($order->first_name)?$order->first_name:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}"
                                               required="required" autofocus type="text">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="last_name">{{ ucwords(str_replace('_',' ','last_name')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="last_name" class="form-control  @error('last_name') is-invalid @enderror" name="last_name"
                                               value="{{ !empty($order->last_name)?$order->last_name:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}"
                                               required="required" autofocus type="text">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="email">{{ ucwords(str_replace('_',' ','email')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                                               value="{{ !empty($order->email)?$order->email:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','email')) }}"
                                               required="required" autofocus type="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="phone">{{ ucwords(str_replace('_',' ','phone')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="phone" class="form-control  @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ !empty($order->phone)?$order->phone:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','phone')) }}"
                                               required="required" autofocus type="text">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="order_status">Select
                                        {{ ucwords(str_replace('_',' ','order_status')) }}
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="order_status" id="order_status"
                                                class="form-control" required>
                                            <option value="">Select {{ ucwords(str_replace('_',' ','order_status')) }}</option>
                                            <option value="Missing Orders" {{ (old('order_status') === "Missing Orders" || $order->order_status === "Missing Orders") ? 'selected' : '' }}>Missing Orders</option>
                                            <option value="Canceled" {{ (old('order_status') === "Canceled" || $order->order_status === "Canceled") ? 'selected' : '' }}>Canceled</option>
                                            <option value="Canceled Reversal" {{ (old('order_status') === "Canceled Reversal" || $order->order_status === "Canceled Reversal") ? 'selected' : '' }}>Canceled Reversal</option>
                                            <option value="Chargeback" {{ (old('order_status') === "Chargeback" || $order->order_status === "Chargeback") ? 'selected' : '' }}>Chargeback</option>
                                            <option value="Complete" {{ (old('order_status') === "Complete" || $order->order_status === "Complete") ? 'selected' : '' }}>Complete</option>
                                            <option value="Denied" {{ (old('order_status') === "Denied" || $order->order_status === "Denied") ? 'selected' : '' }}>Denied</option>
                                            <option value="Expired" {{ (old('order_status') === "Expired" || $order->order_status === "Expired") ? 'selected' : '' }}>Expired</option>
                                            <option value="Failed" {{ (old('order_status') === "Failed" || $order->order_status === "Failed") ? 'selected' : '' }}>Failed</option>
                                            <option value="Pending" {{ (old('order_status') === "Pending" || $order->order_status === "Pending") ? 'selected' : '' }}>Pending</option>
                                            <option value="Processed" {{ (old('order_status') === "Processed" || $order->order_status === "Processed") ? 'selected' : '' }}>Processed</option>
                                            <option value="Processing" {{ (old('order_status') === "Processing" || $order->order_status === "Processing") ? 'selected' : '' }}>Processing</option>
                                            <option value="Refunded" {{ (old('order_status') === "Refunded" || $order->order_status === "Refunded") ? 'selected' : '' }}>Refunded</option>
                                            <option value="Reversed" {{ (old('order_status') === "Reversed" || $order->order_status === "Reversed") ? 'selected' : '' }}>Reversed</option>
                                            <option value="Shipped" {{ (old('order_status') === "Shipped" || $order->order_status === "Shipped") ? 'selected' : '' }}>Shipped</option>
                                            <option value="Voided" {{ (old('order_status') === "Voided" || $order->order_status === "Voided") ? 'selected' : '' }}>Voided</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ action('admin\DashboardController@index') }}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/iCheck/icheck.min.js')}}"></script>
@endsection
