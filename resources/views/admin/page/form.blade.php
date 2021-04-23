@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    @php
        $action = url('admin/'.request()->segment(2).'/form/'.request()->segment(4));
        $required = request()->segment(4) === 'add' ? 'required' : '';
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
                                <input type="hidden" id="slug" name="slug"
                                       value="{{ !empty($record->slug)?$record->slug:'' }}" data-validation="required">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="title">{{ ucwords(str_replace('_',' ','title')) }}<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="title" class="form-control  @error('title') is-invalid @enderror" onkeyup="mySlug()" name="title"
                                               value="{{ !empty($record->title)?$record->title:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','title')) }}"
                                               required="required" autofocus type="text">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="description">{{ucwords(str_replace('_',' ','description'))}} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="description" name="description"
                                                  class="form-control editor" required>{{ $record->description ?? "" }}</textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="sort_order">{{ ucwords(str_replace('_',' ','sort_order')) }}
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="sort_order" class="form-control" name="sort_order"
                                               value="{{ !empty($record->sort_order)?$record->sort_order:'' }}"
                                               placeholder="{{ ucwords(str_replace('_',' ','sort_order')) }}"
                                               required="required" autofocus type="number">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">{{ ucwords(str_replace('_',' ','image')) }}
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img
                                                    src="{{asset(!empty($record->image)?$record->image:'assets/admin/images/placeholder.png')}}"
                                                    class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="image" name="image" accept=".jpg,.png" {{ $required }}>
                                                    <input type="text" name="image" value="{{asset(!empty($record->image)?$record->image:'')}}" hidden>
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
    <script src="{{asset('assets/admin/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        // Slug
        function mySlug() {
            let slug = document.getElementById('title').value;
            document.getElementById('slug').value = slug.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
        // Text Editor
        $('.editor').summernote({
            placeholder: 'Description',
            height: 100
        });
    </script>
@endsection
