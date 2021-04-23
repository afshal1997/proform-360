@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-bs4.min.css') }}">
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

                            <form class="form-horizontal form-label-left" method="POST" action="{{route('home.edit')}}" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner_text">Banner Text <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="banner_text" class="form-control editor" id="banner_text" rows="3" placeholder="Banner Text" required="required">{{ !empty($record->banner_text)?$record->banner_text:'' }}</textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading1">Section Heading 1 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_heading1" class="form-control" name="section_heading1" value="{{ !empty($record->section_heading1)?$record->section_heading1:'' }}" placeholder="Section Heading 1" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_sub_heading1">Section Sub Heading 1 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_sub_heading1" class="form-control" name="section_sub_heading1" value="{{ !empty($record->section_sub_heading1)?$record->section_sub_heading1:'' }}" placeholder="Section Sub Heading 1" required="required" autofocus type="section_sub_heading1">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_paragraph1">Section Paragraph 1 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="section_paragraph1" class="form-control editor" name="section_paragraph1" placeholder="Section Paragraph 1" required="required" autofocus>{{ !empty($record->section_paragraph1)?$record->section_paragraph1:'' }}</textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading2">Section Heading 2 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_heading2" class="form-control" name="section_heading2" value="{{ !empty($record->section_heading2)?$record->section_heading2:'' }}" placeholder="Section Heading 2" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_sub_heading2">Section Sub Heading 2 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_sub_heading2" class="form-control" name="section_sub_heading2" value="{{ !empty($record->section_sub_heading2)?$record->section_sub_heading2:'' }}" placeholder="Section Sub Heading 2" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_paragraph2">Section Paragraph 2 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_paragraph2" class="form-control" name="section_paragraph2" value="{{ !empty($record->section_paragraph2)?$record->section_paragraph2:'' }}" placeholder="Section Paragraph 2" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading3">Section Heading 3 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_heading3" class="form-control" name="section_heading3" value="{{ !empty($record->section_heading3)?$record->section_heading3:'' }}" placeholder="Section Heading 3" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_paragraph3">Section Paragraph 3 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_paragraph3" class="form-control" name="section_paragraph3" value="{{ !empty($record->section_paragraph3)?$record->section_paragraph3:'' }}" placeholder="Section Paragraph 3" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_heading4">Section Heading 4 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_heading4" class="form-control" name="section_heading4" value="{{ !empty($record->section_heading4)?$record->section_heading4:'' }}" placeholder="Section Heading 4" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_paragraph4">Section Paragraph 4 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="section_paragraph4" class="form-control" name="section_paragraph4" value="{{ !empty($record->section_paragraph4)?$record->section_paragraph4:'' }}" placeholder="Section Paragraph 4" required="required" autofocus type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner">Banner <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->banner)?$record->banner:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="banner" name="banner" accept=".jpg,.png">
                                                    <input type="text" id="banner" name="banner" value="{{ !empty($record->banner) ? $record->banner : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section_image">section_image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->section_image)?$record->section_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="section_image" name="section_image" accept=".jpg,.png">
                                                    <input type="text" id="section_image" name="section_image" value="{{ !empty($record->section_image) ? $record->section_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
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
        // Text Editor
        $('.editor').summernote({
            placeholder: 'Description',
            height: 100
        });
    </script>
@endsection
