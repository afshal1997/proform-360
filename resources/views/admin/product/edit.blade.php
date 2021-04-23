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
                    <h3>{{ $pageTitle }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ $pageTitle }}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="close-link">
                                        <i class="fa fa-close"></i>
                                    </a>
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
                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" novalidate>
                                @csrf @method('PATCH')
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
                                                <span class="step_descr">
                                                    Step 5<br/>
                                                    <small>Step 5 Images</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div id="step-1">
                                        <h2 class="StepTitle" style="text-align: center">Step 1 General</h2>
                                        <input type="hidden" id="slug" name="slug" value="{{ $product->slug }}" data-validation="required">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Select Category
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="category_id[]" id="category_id" class="form-control select2" required="required" multiple="multiple">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $product->categories->contains('id', $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Product Name
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="name" class="form-control" onkeyup="mySlug()" name="name" value="{{ $product->name }}" placeholder="Product Name" required="required" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea name="description" class="form-control editor" id="description" rows="3" placeholder="{{ ucwords(str_replace('_', ' ', 'description')) }}" required="required">{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="meta_tag_title">Meta Tag Title
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="meta_tag_title" class="form-control" name="meta_tag_title" value="{{ $product->meta_tag_title }}" placeholder="{{ ucwords(str_replace('_', ' ', 'meta_tag_title')) }}" required="required" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="meta_tag_description">Meta Tag Description
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="meta_tag_description" name="meta_tag_description" class="form-control">{{ $product->meta_tag_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="meta_tag_keywords">Meta Tag Keywords
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="meta_tag_keywords" name="meta_tag_keywords" class="form-control">{{ $product->meta_tag_keywords }}</textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tag_id">Select Tag</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="tag_id[]" id="tag_id" class="form-control select2" multiple="multiple">
                                                    @foreach($tags as $tag)
                                                        <option value="{{ $tag->id }}" {{ $product->tags->contains('id', $tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="step-2">
                                        <h2 class="StepTitle" style="text-align: center">Step 2 Data</h2>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="sku">SKU</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="sku" class="form-control" name="sku" value="{{ $product->sku }}" placeholder="Enter SKU" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="model">Model</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="model" class="form-control" name="model" value="{{ $product->model }}" placeholder="Enter Model" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="upc">UPC</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="upc" class="form-control" name="upc" value="{{ $product->upc }}" placeholder="Enter UPC" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="location">Location</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="location" class="form-control" name="location" value="{{ $product->location }}" placeholder="Enter Location" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="quantity">Quantity</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="quantity" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Enter Quantity" autofocus type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="minimum_quantity">Minimum Quantity</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="minimum_quantity" class="form-control" name="minimum_quantity" value="{{ $product->minimum_quantity }}" placeholder="Enter Minimum Quantity" autofocus type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="subtract_stock">Select Subtract Stock</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="subtract_stock" id="subtract_stock" class="form-control">
                                                    <option value="1" @if ($product->subtract_stock === 1) selected @endif>Yes</option>
                                                    <option value="0" @if ($product->subtract_stock === 0) selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="out_of_stock">Select Out Of Stock Status</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="out_of_stock" id="out_of_stock" class="form-control">
                                                    <option value="Out Of Stock" {{ $product->out_of_stock === 'Out Of Stock' ? 'selected' : '' }}>Out Of Stock</option>
                                                    <option value="2-3 Days" {{ $product->out_of_stock === '2-3 Days' ? 'selected' : '' }}>2-3 Days</option>
                                                    <option value="In Stock" {{ $product->out_of_stock === 'In Stock' ? 'selected' : '' }}>In Stock</option>
                                                    <option value="Pre-Order" {{ $product->out_of_stock === 'Pre-Order' ? 'selected' : '' }}>Pre-Order</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="requires_shipping">Requires Shipping</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="requires_shipping" id="requires_shipping" class="form-control">
                                                    <option value="1" {{ $product->requires_shipping === 1 ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ $product->requires_shipping === 0 ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="date_available">Date Available
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date_available" class="form-control" name="date_available" value="{{ $product->date_available }}" placeholder="Select Date Available" autofocus type="date">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="weight">Weight
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="weight" class="form-control" name="weight" value="{{ $product->weight }}" placeholder="Enter Weight" autofocus type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="dimension">Dimensions (L x W x H)</label>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_length" class="form-control" name="dimension_length"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_length')) }}" value="{{ $product->dimension_length }}" autofocus type="number">
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_width" class="form-control" name="dimension_width"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_width')) }}" value="{{ $product->dimension_width }}" autofocus type="number">
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <input id="dimension_height" class="form-control" name="dimension_height"
                                                       placeholder="{{ ucwords(str_replace('_',' ','dimension_height')) }}" value="{{ $product->dimension_height }}" autofocus type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="brand">Select Brand</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="brand" id="brand" class="form-control">
                                                    <option value="">Select {{ ucwords(str_replace('_',' ','brand')) }}</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->name }}" {{ $product->brand === $brand->name ? 'selected' : '' }}>{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="best_selling">Select {{ ucwords(str_replace('_',' ','best_selling')) }}</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="best_selling" id="best_selling" class="form-control">
                                                    <option value="0" {{ $product->best_selling === 0 ? 'selected' : '' }}>No</option>
                                                    <option value="1" {{ $product->best_selling === 1 ? 'selected' : '' }}>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="featured">Select Featured</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select name="featured" id="featured" class="form-control">
                                                    <option value="0" {{ $product->featured === 0 ? 'selected' : '' }}>No</option>
                                                    <option value="1" {{ $product->featured === 1 ? 'selected' : '' }}>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="step-3">
                                        <h2 class="StepTitle" style="text-align: center">Step 3 Price</h2>
                                        <div class="form-group table-responsive">
                                            <table id="option_value" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="text-center">Currency</td>
                                                        <td class="text-center">Regular Price</td>
                                                        <td class="text-center">Discount Price</td>
                                                        <td class="text-center">Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="price_table">
                                                    @foreach ($product->prices as $price)
                                                        <tr>
                                                            <input type="hidden" name="new_price_id[]" value="{{ $price->id }}">
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <select name="currency_id[]" class="form-control" required>
                                                                    @foreach ($currencies as $currency)
                                                                        <option value="{{ $currency->id }}" {{ $price->currency->id === $currency->id ? 'selected' : '' }}>{{ $currency->symbol }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <input type="number" name="regular_price[]" class="form-control" value="{{ $price->regular_price }}" placeholder="Regular Price" required>
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <input type="number" name="discount_price[]" class="form-control" value="{{ $price->discount_price }}" placeholder="Discount Price">
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" title="Delete Price" class="remove_price btn btn-danger">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td class="text-center">
                                                            <button type="button" id="add_price" title="Add Price" class="btn btn-primary">
                                                                <i class="fa fa-plus-circle"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step-4">
                                        <h2 class="StepTitle" style="text-align: center">Step 4 Options</h2>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="option_name">Option Name
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="option_name" class="form-control" name="option_name" value="{{ $product->option_name }}" placeholder="Enter Option Name" autofocus type="text">
                                            </div>
                                        </div>

                                        <div class="form-group table-responsive">
                                            <table id="option_value" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="text-center">Value</td>
                                                        <td class="text-center">Option Image</td>
                                                        <td class="text-center">Quantity</td>
                                                        <td class="text-center">Subtract Quantity</td>
                                                        <td class="text-center">Price</td>
                                                        <td class="text-center">Weight</td>
                                                        <td class="text-center">Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="item_table">
                                                    @foreach ($product->options as $index => $option)
                                                        <tr>
                                                            <input type="hidden" name="new_option_id[]" value="{{ $option->id }}">
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <input type="text" name="option_value[]" class="form-control" value="{{ $option->option_value }}" placeholder="Value" required="required">
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <img width="65" class="img-responsive" id="option-image-{{ $index }}" src="@if ($option->option_image) {{ asset($option->option_image) }} @else {{ asset('assets/admin/images/placeholder.png') }} @endif" alt="optionImage">
                                                                <input type="file" id="option_image" name="option_image[]" accept=".jpg,.png" onchange="loadImage(event, 'option-image-{{ $index }}')">
                                                                <input type="hidden" name="option_image[]" value="{{ $option->option_image }}">
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <input type="number" name="option_quantity[]" value="{{ $option->option_quantity }}" class="form-control" placeholder="Quantity">
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <select name="option_subtract_stock[]" class="form-control">
                                                                    <option value="1" @if ($option->option_subtract_stock === 1) selected @endif>Yes</option>
                                                                    <option value="0" @if ($option->option_subtract_stock === 0) selected @endif>No</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div data-option-id="{{ $option->id }}">
                                                                    @foreach ($option->currencies as $index => $available_option_currency)
                                                                        <div style="margin: 0 0 40px 0" data-option-price-id="{{ $available_option_currency->pivot->id }}">
                                                                            <input type="hidden" name="option_price[{{ $option->id }}][id][]" value="{{ $available_option_currency->pivot->id }}">
                                                                            <input type="hidden" name="option_price[{{ $option->id }}][option_id][]" value="{{ $available_option_currency->pivot->option_id }}">
                                                                            <div class="col-sm-5" style="margin: 0; padding: 0">
                                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                                <input type="number" name="option_price[{{ $option->id }}][price][]" value="{{ $available_option_currency->pivot->price }}" class="form-control" placeholder="Price">
                                                                            </div>
                                                                            <div class="col-sm-5" style="margin: 0; padding: 0">
                                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                                <select name="option_price[{{ $option->id }}][currency_id][]" class="form-control">
                                                                                    @foreach ($currencies as $currency)
                                                                                        <option value="{{ $currency->id }}" @if ($available_option_currency->pivot->currency_id === $currency->id) selected @endif>{{ $currency->symbol }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2" style="margin: 0; padding: 0">
                                                                                <button type="button" onclick="removeOptionPrice({{ $available_option_currency->pivot->id }})" title="Delete Option Price" class="btn btn-danger">
                                                                                    <i class="fa fa-minus-circle"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <button type="button" onclick="addOptionPrice({{ $option->id }})" title="Add Option" class="btn btn-primary">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <!--suppress HtmlFormInputWithoutLabel -->
                                                                <input type="text" name="option_weight[]" value="{{ $option->option_weight }}" class="form-control" placeholder="Weight">
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" title="Delete Option" class="remove_option btn btn-danger">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                    <td class="text-center">
                                                        <button type="button" id="add_option" title="Add Option" class="btn btn-primary">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step-5">
                                        <h2 class="StepTitle" style="text-align: center">Step 5 Images</h2>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Product Image <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group-btn">
                                                    <div class="image-upload">
                                                        <!--suppress HtmlRequiredAltAttribute -->
                                                        <img src="{{ asset($product->image) }}" class="img-responsive" id="product-image-preview">
                                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                                        <div class="file-btn">
                                                            <input type="file" id="image" name="new_image" accept=".jpg,.png" onchange="loadImage(event, 'product-image-preview')">
                                                            <label class="btn btn-info">Upload</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="images">Product Multi Images <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group-btn multi-image-upload-main">
                                                    @php
                                                        $product->images = json_decode($product->images, false);
                                                    @endphp
                                                    @if (is_array($product->images))
                                                        @foreach ($product->images as $image)
                                                            <div class="multi-image-upload">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                                <!--suppress HtmlRequiredAltAttribute -->
                                                                <img src="{{ asset($image) }}">
                                                                <div class="file-btn">
                                                                    <input type="hidden" id="images" name="images[]" value="{{ $image }}" hidden="">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="multi-image-upload">
                                                        <span id="product-multi-image-preview">
                                                            <!--suppress HtmlRequiredAltAttribute -->
                                                            <img src="{{ asset('assets/admin/images/placeholder.png') }}">
                                                        </span>
                                                        <div class="file-btn">
                                                            <input type="file" id="images" name="new_images[]" accept="image/*" onchange="loadImage(event, 'product-multi-image-preview', true)" multiple>
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
        const loadImage = (event, previewElementId, multiple = false) => {
            const previewElement = document.getElementById(previewElementId);

            if (!multiple) {
                previewElement.setAttribute('src', URL.createObjectURL(event.target.files[0]));
                previewElement.onload = () => URL.revokeObjectURL(previewElement.getAttribute('src'));
            } else {
                const files = Array.from(event.target.files);
                previewElement.innerHTML = null;
                files.forEach(file => {
                    let img = document.createElement('img');
                    img.setAttribute('src', URL.createObjectURL(file));
                    previewElement.appendChild(img);
                });
            }
        };

        // Select2
        $('.select2').select2();

        // Text Editor
        $('.editor').summernote({
            placeholder: 'Description',
            height: 100
        });

        // Pricing Start
        let currency_option = '';
        //Fetch Currency
        fetch(`{{ route('currency.index') }}`)
            .then(r => r.json())
            .then(data => {
                data.forEach(item => currency_option += `<option value="${item.id}">${item.symbol}</option>`)
            })
            .catch(error => console.log(error));

        // Options Start
        let newOptionsCount = 1;
        let newOptionsPriceCount = 1;

        const removeOptionPrice = optionPriceID => {
            document.querySelector(`div[data-option-price-id="${optionPriceID}"]`).remove();
        };

        const addOptionPrice = optionID => {
            $(`div[data-option-id="${optionID}"]`).append(`
                <div style="margin: 0 0 40px 0" data-option-price-id="new-option-price-${newOptionsPriceCount}">
                    <input type="hidden" name="option_price[${optionID}][id][]">
                    <input type="hidden" name="option_price[${optionID}][option_id][]">
                    <div class="col-sm-5" style="margin: 0; padding: 0">
                        <input type="number" name="option_price[${optionID}][price][]" class="form-control" placeholder="Price">
                    </div>
                    <div class="col-sm-5" style="margin: 0; padding: 0">
                        <select name="option_price[${optionID}][currency_id][]" class="form-control">
                            ${currency_option}
                        </select>
                    </div>
                    <div class="col-sm-2" style="margin: 0; padding: 0">
                        <button type="button" onclick="removeOptionPrice('new-option-price-${newOptionsPriceCount}')" title="Delete Option Price" class="btn btn-danger">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                    </div>
                </div>
            `);

            newOptionsPriceCount++;
        }

        document.getElementById('add_option').addEventListener('click', () => {
            let option = `
                <tr>
                    <input type="hidden" name="new_option_id[]">
                    <td>
                        <input type="text" name="option_value[]" class="form-control" placeholder="Value" required="required">
                    </td>
                    <td>
                        <input type="file" id="option_image" name="new_option_image[]" accept=".jpg,.png">
                    </td>
                    <td>
                        <input type="number" name="option_quantity[]" class="form-control" placeholder="Quantity">
                    </td>
                    <td>
                        <select name="option_subtract_stock[]" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </td>
                    <td>
                        <div data-option-id=new-option-${newOptionsCount}>
                            <div style="margin: 0 0 40px 0" data-option-price-id="new-option-price-${newOptionsPriceCount}">
                                <input type="hidden" name="option_price[new-option-${newOptionsCount}][id][]">
                                <input type="hidden" name="option_price[new-option-${newOptionsCount}][option_id][]">
                                <div class="col-sm-5" style="margin: 0; padding: 0">
                                    <input type="number" name="option_price[new-option-${newOptionsCount}][price][]" class="form-control" placeholder="Price">
                                </div>
                                <div class="col-sm-5" style="margin: 0; padding: 0">
                                    <select name="option_price[new-option-${newOptionsCount}][currency_id][]" class="form-control">
                                        ${currency_option}
                                    </select>
                                </div>
                                <div class="col-sm-2" style="margin: 0; padding: 0">
                                    <button type="button" onclick="removeOptionPrice('new-option-price-${newOptionsPriceCount}')" title="Delete Option Price" class="btn btn-danger">
                                        <i class="fa fa-minus-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="addOptionPrice('new-option-${newOptionsCount}')" title="Add Option" class="btn btn-primary">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                    </td>
                    <td>
                        <input type="text" name="option_weight[]" class="form-control" placeholder="Weight">
                    </td>
                    <td class="text-center">
                        <button type="button" title="Delete Option" class="remove_option btn btn-danger">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                    </td>
                </tr>
            `;

            newOptionsCount++;
            newOptionsPriceCount++;

            $('#item_table').append(option);
        });

        $(document).on('click', '.remove_option', (e) => {
            $(e.currentTarget).closest('tr').remove();
        });
        // Options End

        document.getElementById('add_price').addEventListener('click', () => {
            let price = `
                <tr>
                    <input type="hidden" name="new_price_id[]">
                    <td>
                        <select name="currency_id[]" class="form-control" required="required">
                            ${currency_option}
                        </select>
                    </td>
                    <td>
                        <input type="number" name="regular_price[]" class="form-control" placeholder="Regular Price" required="required">
                    </td>
                    <td>
                        <input type="number" name="discount_price[]" class="form-control" placeholder="Discount Price">
                    </td>
                    <td class="text-center">
                        <button type="button" title="Delete Price" class="remove_price btn btn-danger">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                    </td>
                </tr>
            `;
            $('#price_table').append(price);
        })
        $(document).on('click', '.remove_price', e => {
            $(e.currentTarget).closest('tr').remove();
        });
        // Pricing End

        // Slug
        const mySlug = () => {
            let slug = document.getElementById('name').value;
            document.getElementById('slug').value = slug.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
    </script>
@endsection
