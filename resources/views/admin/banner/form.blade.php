@extends('admin.layout.webapp')
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner_type">Select {{ ucwords(str_replace('_',' ','banner_type')) }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="banner_type" id="banner_type" class="form-control" required="required">
                                            <option value="banner">banner</option>
                                            <option value="slider">slider</option>
                                            <option value="banner">banner</option>
                                            <option value="section1">section1</option>
                                            <option value="section2">section2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="title">{{ ucwords(str_replace('_',' ','title')) }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="title" class="form-control" name="title"
                                               value="{{ !empty($record->title)?$record->title:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','title')) }}" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="link">{{ ucwords(str_replace('_',' ','link')) }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="link" class="form-control" name="link"
                                               value="{{ !empty($record->link)?$record->link:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','link')) }}" autofocus type="url">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="sort_order">{{ ucwords(str_replace('_',' ','sort_order')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="sort_order" class="form-control" name="sort_order"
                                               value="{{ !empty($record->sort_order)?$record->sort_order:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','sort_order')) }}"
                                               required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->image)?$record->image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="image" name="image" accept=".jpg,.png">
                                                    <input type="text" name="image" value="{{ !empty($record->image) ? $record->image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
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
@endsection
