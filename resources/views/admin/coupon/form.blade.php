@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    @php
        $action = url('admin/'.request()->segment(2).'/form/'.request()->segment(4));
        if (request()->segment(4) == 'edit' || request()->segment(4) == 'duplicate') {
            $action .= '/'.request()->segment(5);
        }
    @endphp
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

                            <form class="form-horizontal form-label-left" method="POST" action="{{ $action }}"
                                  enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="name">{{ ucwords(str_replace('_',' ','name')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control  @error('name') is-invalid @enderror" name="name"
                                               value="{{ !empty($record->name)?$record->name:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','name')) }}"
                                               required="required" autofocus type="text">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="code">{{ ucwords(str_replace('_',' ','code')) }}<span
                                            class="required">*</span> <span title="The code the customer enters to get the discount.">?</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="code" class="form-control  @error('code') is-invalid @enderror" name="code"
                                               value="{{ !empty($record->code)?$record->code:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','code')) }}"
                                               required="required" autofocus type="text">
                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Select {{ ucwords(str_replace('_',' ','type')) }}<span class="required">*</span> <span title="Percentage or Fixed Amount.">?</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="type" id="type" class="form-control" required>
                                            <option value="">Select {{ ucwords(str_replace('_',' ','type')) }}</option>
                                            @foreach (\App\Models\Coupon::STATUS_SELECT as $status)
                                                <option value="{{ $status }}"  {{ !empty($record->type) ? ($record->type === (string)$status ? 'selected' : '' ) : ''}}>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="discount">{{ ucwords(str_replace('_',' ','discount')) }}<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="discount" class="form-control" name="discount"
                                               value="{{ !empty($record->discount)?$record->discount:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','discount')) }}"
                                               required="required" autofocus type="number">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="date_start">{{ ucwords(str_replace('_',' ','date_start')) }}<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="date_start" class="form-control" name="date_start"
                                               value="{{ !empty($record->date_start)?$record->date_start:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','date_start')) }}"
                                               required="required" autofocus type="date">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="date_end">{{ ucwords(str_replace('_',' ','date_end')) }}<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="date_end" class="form-control" name="date_end"
                                               value="{{ !empty($record->date_end)?$record->date_end:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','date_end')) }}"
                                               required="required" autofocus type="date">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Select Category <span title="Choose all products under selected category.">?</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="category_id[]" id="category_id" class="form-control select2" multiple="multiple">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $id => $category)
                                                <option value="{{$id}}">{{$category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_id">Select Product <span title="Choose specific products the coupon will apply to. Select no products to apply coupon to entire cart.">?</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="product_id[]" id="product_id" class="form-control select2" multiple="multiple">
                                            <option value="">Select Product</option>
                                            @foreach($products as $id => $product)
                                                <option value="{{$id}}">{{$product}}</option>
                                            @endforeach
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
    <script src="{{asset('assets/admin/select2/dist/js/select2.min.js')}}"></script>
    <script>
        $(function(){
            // Select2
            $('.select2').select2();
        })
    </script>
@endsection
