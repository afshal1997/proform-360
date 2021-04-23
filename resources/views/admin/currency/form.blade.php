@extends('admin.layout.webapp')
@section('page_css')
    <!-- iCheck -->
    <link href="{{ asset('assets/admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
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
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="code" class="form-control" name="code"
                                               value="{{ !empty($record->code)?$record->code:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','code')) }}"
                                               required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="symbol">{{ ucwords(str_replace('_',' ','symbol')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="symbol" class="form-control" name="symbol"
                                               value="{{ !empty($record->symbol)?$record->symbol:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','symbol')) }}"
                                               required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="symbol">{{ ucwords(str_replace('_',' ','active_currency')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="radio" class="flat" name="is_active" value="1" {{ (isset($record->is_active) ? (($record->is_active == 1) ? 'checked' : '') : '' ) }}> YES
                                        <input type="radio" class="flat" name="is_active" value="0" {{ (isset($record->is_active) ? (($record->is_active == 0) ? 'checked' : '') : '' ) }}> NO
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
