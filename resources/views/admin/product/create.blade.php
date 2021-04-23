@extends('admin.layout.webapp')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/admin/select2/dist/css/select2.min.css') }}">
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
                            @if($errors->any())
                                <div class="container" style="padding: 0 30% 0 30%;">
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('product.store') }}"
                                  enctype="multipart/form-data" novalidate>
                                <div id="wizard" class="form_wizard wizard_horizontal">
                                    <ul class="wizard_steps">
                                        <li>
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
                                              Step 1<br/>
                                              <small>Step 1 General</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
                                              Step 2<br/>
                                              <small>Step 2 Data</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
                                              Step 3<br/>
                                              <small>Step 3 Price</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
                                              Step 4<br/>
                                              <small>Step 4 Options</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-5">
                                                <span class="step_no">5</span>
                                                <span class="step_descr">Step 5
                                            <br/>
                                                <small>Step 5 Images
                                                </small>
                                            </span>
                                            </a>
                                        </li>
                                    </ul>


                                    <div id="step-1">
                                        <h2 class="StepTitle" style="text-align: center">Step 1 General</h2>
                                        @csrf
                                        <input type="hidden" id="slug" name="slug" data-validation="required">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Select Category <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="category_id[]" id="category_id" class="form-control select2" required="required" multiple="multiple">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{ (collect(old('category_id'))->contains($category->id)) ? 'selected':'' }}>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Product Name
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="name" class="form-control" onkeyup="mySlug()" name="name"
                                                       placeholder="Product Name" value="{{ old('name') }}" required="required" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="details">{{ ucwords(str_replace('_',' ','description')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea name="description" class="form-control editor" id="description" rows="3" placeholder="{{ ucwords(str_replace('_',' ','description')) }}">{{ old('description') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                   for="meta_tag_title">{{ ucwords(str_replace('_',' ','meta_tag_title')) }}
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="meta_tag_title" class="form-control" name="meta_tag_title"
                                                       placeholder="{{ ucwords(str_replace('_',' ','meta_tag_title')) }}"
                                                       required="required" value="{{ old('meta_tag_title') }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                   for="meta_tag_description">{{ucwords(str_replace('_',' ','meta_tag_description'))}}
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="meta_tag_description" name="meta_tag_description" class="form-control">{{ old('meta_tag_description') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                   for="meta_tag_keywords">{{ucwords(str_replace('_',' ','meta_tag_keywords'))}}
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="meta_tag_keywords" name="meta_tag_keywords" class="form-control">{{ old('meta_tag_keywords') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tag_id">Select {{ucwords(str_replace('_',' ','Tag'))}}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="tag_id[]" id="tag_id" class="form-control select2" multiple="multiple">
                                                    <option value="">Select {{ucwords(str_replace('_',' ','Tag'))}}</option>
                                                    @foreach($tags as $tag)
                                                        <option value="{{$tag->id}}" {{ (collect(old('tag_id'))->contains($tag->id)) ? 'selected' : '' }}>{{$tag->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="step-2">
                                        <h2 align="center" class="StepTitle">Step 2 Data</h2>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="sku">{{ ucwords(str_replace('_',' ','sku')) }} <span title="Stock Keeping Unit">?</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="sku" class="form-control" name="sku"
                                                       placeholder="{{ ucwords(str_replace('_',' ','sku')) }}" value="{{ old('sku') }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="model">{{ ucwords(str_replace('_',' ','model')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="model" class="form-control" name="model"
                                                       placeholder="{{ ucwords(str_replace('_',' ','model')) }}" value="{{ old('model') }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="upc">{{ ucwords(str_replace('_',' ','upc')) }} <span title="Universal Product Code">?</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="upc" class="form-control" name="upc"
                                                       placeholder="{{ ucwords(str_replace('_',' ','upc')) }}" value="{{ old('upc') }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="location">{{ ucwords(str_replace('_',' ','location')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="location" class="form-control" name="location"
                                                       placeholder="{{ ucwords(str_replace('_',' ','location')) }}" value="{{ old('location') }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="quantity">{{ ucwords(str_replace('_',' ','quantity')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="quantity" class="form-control" name="quantity"
                                                       placeholder="{{ ucwords(str_replace('_',' ','quantity')) }}" value="{{ old('quantity') }}" autofocus type="number">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="minimum_quantity">{{ ucwords(str_replace('_',' ','minimum_quantity')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="minimum_quantity" class="form-control" name="minimum_quantity"
                                                       placeholder="{{ ucwords(str_replace('_',' ','minimum_quantity')) }}" value="{{ old('minimum_quantity') }}" autofocus type="number">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="subtract_stock">Select {{ ucwords(str_replace('_',' ','subtract_stock')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="subtract_stock" id="subtract_stock" class="form-control">
                                                    <option value="1" {{ (old('subtract_stock') == 1) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ (old('subtract_stock') == 0) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="out_of_stock">Select {{ ucwords(str_replace('_',' ','out_of_stock')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="out_of_stock" id="out_of_stock" class="form-control">
                                                    <option value="Out Of Stock"  {{ (old('out_of_stock') == "Out Of Stock") ? 'selected' : '' }}>Out Of Stock</option>
                                                    <option value="2-3 Days" {{ (old('out_of_stock') == "2-3 Days") ? 'selected' : '' }}>2-3 Days</option>
                                                    <option value="In Stock" {{ (old('out_of_stock') == "In Stock") ? 'selected' : '' }}>In Stock</option>
                                                    <option value="Pre-Order" {{ (old('out_of_stock') == "Pre-Order") ? 'selected' : '' }}>Pre-Order</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="requires_shipping">Select {{ ucwords(str_replace('_',' ','requires_shipping')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="requires_shipping" id="requires_shipping" class="form-control">
                                                    <option value="1" {{ (old('subtract_stock') == 1) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ (old('subtract_stock') == 0) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="date_available">{{ ucwords(str_replace('_',' ','date_available')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date_available" class="form-control" name="date_available"
                                                       placeholder="{{ ucwords(str_replace('_',' ','date_available')) }}" value="{{ old('date_available') }}" autofocus type="date">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="weight">{{ ucwords(str_replace('_',' ','weight')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="weight" class="form-control" name="weight"
                                                       placeholder="{{ ucwords(str_replace('_',' ','weight')) }}" value="{{ old('weight') }}" autofocus type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="dimension">Dimensions (L x W x H)</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_length" class="form-control" name="dimension_length"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_length')) }}" value="{{ old('dimension_length') }}" autofocus type="number">
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_width" class="form-control" name="dimension_width"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_width')) }}" value="{{ old('dimension_width') }}" autofocus type="number">
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_height" class="form-control" name="dimension_height"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_height')) }}" value="{{ old('dimension_height') }}" autofocus type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="brand">Select {{ ucwords(str_replace('_',' ','brand')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="brand" id="brand" class="form-control">
                                                    <option value="">Select {{ ucwords(str_replace('_',' ','brand')) }}</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->name}}" {{ ($brand->name == old('brand')) ? 'selected' : '' }}>{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="best_selling">Select {{ ucwords(str_replace('_',' ','best_selling')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="best_selling" id="best_selling" class="form-control">
                                                    <option value="1" {{ (old('subtract_stock') == 1) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ (old('subtract_stock') == 0) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="featured">Select {{ ucwords(str_replace('_',' ','featured')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="featured" id="featured" class="form-control">
                                                    <option value="1" {{ (old('subtract_stock') == 1) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ (old('subtract_stock') == 0) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="step-3">
                                        <h2 align="center" class="StepTitle">Step 3 Price</h2>
                                        <div class="form-group table-responsive">
                                            <table id="option_value" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','currency')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','regular_price')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','discount_price')) }}</td>
                                                    <td class="text-center">Action</td>
                                                </tr>
                                                </thead>
                                                <tbody id="price_table">

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td class="text-center">
                                                        <button type="button" id="add_price" title="Add Price" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step-4">
                                        <h2 align="center" class="StepTitle">Step 4 Options</h2>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="option_name">{{ ucwords(str_replace('_',' ','option_name')) }}
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="option_name" class="form-control" name="option_name"
                                                       placeholder="{{ ucwords(str_replace('_',' ','option_name')) }}" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="form-group table-responsive">
                                            <table id="option_value" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','value')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','option_image')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','quantity')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','subtract_stock')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','price')) }}</td>
                                                    <td class="text-center">{{ ucwords(str_replace('_',' ','weight')) }}</td>
                                                    <td class="text-center">Action</td>
                                                </tr>
                                                </thead>
                                                <tbody id="item_table">

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                    <td class="text-center">
                                                        <button type="button" id="add_option" title="Add Option" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step-5">
                                        <h2 align="center" class="StepTitle">Step 5 Images</h2>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Product Image <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group-btn">
                                                    <div class="image-upload">
                                                        <img src="{{asset('assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                        <div class="file-btn">
                                                            <input type="file" id="image" name="image" accept=".jpg,.png">
                                                            <input type="text" name="image" value="{{ !empty($record->image) ? $record->image : '' }}" hidden="">
                                                            <label class="btn btn-info">Upload</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="images">Product Multi Images <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group-btn multi-image-upload-main">
                                                    <div class="multi-image-upload">
                                                        <img src="{{asset('assets/admin/images/placeholder.png')}}">
                                                        <div class="file-btn">
                                                            <input type="file" id="images" name="images[]" accept=".jpg,.png">
                                                            <label class="btn btn-info">Upload</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- End SmartWizard Content -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="{{asset('assets/admin/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('assets/admin/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        var j = 0;

        //Fetch Currency
        var currency_option = '';
        fetch(`{{ route('currency.index') }}`).then(r => r.json())
            .then((data) => {
                data.forEach((item) => {
                    currency_option += `<option value="${item.id}">${item.symbol}</option>`;
                })
            })
            .catch(error => alert_danger(error));

        // Option Pricing Start
        const addOptionPrice = (optionID)  => {
            $(`#OptionPrice${optionID}`).append(
                `<tr>
                        <td>
                            <select name="option_currency_id[${optionID}][]" class="form-control" required="required">
                                <option value="">Select Currency</option>
                                ${currency_option}
                            </select>
                        </td>
                        <td>
                            <input type="number" name="price[${optionID}][]" class="form-control" placeholder="Price">
                        </td>
                        <td><button type="button" title="Delete Option Price" class="btn btn-danger removeOptionPrice"><i class="fa fa-minus-circle"></i></button></td>
                    </tr>`
            );
        }
        $(document).on('click','.removeOptionPrice', (e) => {
            $(e.currentTarget).closest('tr').remove();
        })
        // Option Pricing End

        // Slug
        function mySlug() {
            let slug = document.getElementById('name').value;
            document.getElementById('slug').value = slug.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }

        (function () {
            // Select2
            $('.select2').select2();

            // Text Editor
            $('.editor').summernote({
                placeholder: 'Description',
                height: 100
            });

            // Options Start
            document.getElementById('add_option').addEventListener('click', () => {
                let option = `<tr>
                                <td>
                                    <input type="text" name="option_value[${j}]" class="form-control" placeholder="Value" required="required">
                                </td>
                                <td>
                                    <input type="file" id="option_image" name="option_image[${j}]" accept=".jpg,.png">
                                    <input type="text" name="option_image[${j}]" hidden="">
                                </td>
                                <td>
                                    <input type="number" name="option_quantity[${j}]" class="form-control" placeholder="Quantity">
                                </td>
                                <td>
                                    <select name="option_subtract_stock[${j}]" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </td>
                                <td>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select Currency</th>
                                            <th>Option Price</th>
                                            <th><button type="button" onclick="addOptionPrice(${j})" title="Add Option" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></th>
                                        </tr>
                                    </thead>
                                    <tbody id="OptionPrice${j}"></tbody>
                                </table>
                                </td>
                                <td>
                                    <input type="text" name="option_weight[${j}]" class="form-control" placeholder="Weight">
                                </td>
                                <td class="text-center"><button type="button" title="Delete Option" class="remove_option btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                            </tr>`;
                $('#item_table').append(option);
                j++;
            })
            $(document).on('click', '.remove_option', (e) => {
                $(e.currentTarget).closest('tr').remove();
            })
            // Options End


            // Pricing Start
            document.getElementById('add_price').addEventListener('click', () => {
                let price = `<tr>
                            <td>
                                <select name="currency_id[]" class="form-control" required="required">
                                    <option value="">Select Currency</option>
                                    ${currency_option}
                                </select>
                            </td>
                            <td>
                                <input type="number" name="regular_price[]" class="form-control" placeholder="Regular Price" required="required">
                            </td>
                            <td>
                                <input type="number" name="discount_price[]" class="form-control" placeholder="Discount Price">
                            </td>
                            <td class="text-center"><button type="button" title="Delete Price" class="remove_price btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                        </tr>`;
                $('#price_table').append(price);
            })
            $(document).on('click', '.remove_price', (e) => {
                $(e.currentTarget).closest('tr').remove();
            })
            // Pricing End
        })()

    </script>
@endsection
