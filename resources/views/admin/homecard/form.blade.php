@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-bs4.min.css') }}">
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

                            <form class="form-horizontal form-label-left" method="POST" action="{{ $action }}" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="icon">Select Icon
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="icon" id="icon"
                                                class="form-control select2">
                                            <option value="">Select {{ ucwords(str_replace('_',' ','icon')) }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="heading">{{ ucwords(str_replace('_',' ','heading')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="heading" class="form-control" name="heading"
                                               value="{{ !empty($record->heading)?$record->heading:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','heading')) }}"
                                               required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="text">{{ucwords(str_replace('_',' ','text'))}} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="text" name="text"
                                                  class="form-control editor" required>{{ $record->text ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('admin') }}" class="btn btn-primary">Cancel</a>
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
    <script src="{{asset('assets/admin/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/admin/select2/dist/js/select2.min.js')}}"></script>
    <script>
        $('.select2').select2();

        fetch('{{asset('assets/admin/font-awesome-4.7.0.json')}}').then(r=>r.json()).then(res => {
            let fontawesomes = '';
            res.fontawesome.forEach(data => {
                fontawesomes += `<option value="${data}">${data}</option>`
            })
            $('#icon').html(fontawesomes);
        })
        // Text Editor
        $('.editor').summernote({
            placeholder: 'Description',
            height: 100
        });
    </script>
@endsection
