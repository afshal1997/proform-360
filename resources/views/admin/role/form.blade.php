@extends('admin.layout.webapp')
<style>
    .role-table {
        width: 48% !important;
        margin-bottom: 1rem !important;
        color: #212529 !important;
        margin: 0 auto !important;
    }
</style>
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Role Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" name="name" value="{{ !empty($record->name)?$record->name:'' }}" placeholder="Role Name" required="required" autofocus type="text">
                                    </div>
                                </div>

                                <?php
                                if (isset($record->permission)) {
                                    $record = json_decode($record->permission) ?? [];
                                } else {
                                    $record = [];
                                }
                                ?>
                                <table class="table role-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Create</th>
                                        <th>Update</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Users</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" <?php echo (in_array('createUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" <?php echo (in_array('updateUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" <?php echo (in_array('viewUser', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" <?php echo (in_array('deleteUser', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Roles</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createRole" <?php echo (in_array('createRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateRole" <?php echo (in_array('updateRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewRole" <?php echo (in_array('viewRole', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteRole" <?php echo (in_array('deleteRole', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Currency</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCurrency" <?php echo (in_array('createCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCurrency" <?php echo (in_array('updateCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCurrency" <?php echo (in_array('viewCurrency', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCurrency" <?php echo (in_array('deleteCurrency', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCoupon" <?php echo (in_array('createCoupon', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCoupon" <?php echo (in_array('updateCoupon', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCoupon" <?php echo (in_array('viewCoupon', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCoupon" <?php echo (in_array('deleteCoupon', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory" <?php echo (in_array('createCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory" <?php echo (in_array('updateCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory" <?php echo (in_array('viewCategory', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory" <?php echo (in_array('deleteCategory', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Product</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createProduct" <?php echo (in_array('createProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct" <?php echo (in_array('updateProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct" <?php echo (in_array('viewProduct', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct" <?php echo (in_array('deleteProduct', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Tag</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createTag" <?php echo (in_array('createTag', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateTag" <?php echo (in_array('updateTag', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewTag" <?php echo (in_array('viewTag', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteTag" <?php echo (in_array('deleteTag', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Banner</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createBanner" <?php echo (in_array('createBanner', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateBanner" <?php echo (in_array('updateBanner', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewBanner" <?php echo (in_array('viewBanner', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteBanner" <?php echo (in_array('deleteBanner', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Page</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createPage" <?php echo (in_array('createPage', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePage" <?php echo (in_array('updatePage', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPage" <?php echo (in_array('viewPage', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePage" <?php echo (in_array('deletePage', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Order</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateOrder" <?php echo (in_array('updateOrder', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder" <?php echo (in_array('viewOrder', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteOrder" <?php echo (in_array('deleteOrder', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Setting</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" <?php echo (in_array('updateSetting', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Home</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateHome" <?php echo (in_array('updateHome', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Pricing</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createPricing" <?php echo (in_array('createPricing', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePricing" <?php echo (in_array('updatePricing', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPricing" <?php echo (in_array('viewPricing', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePricing" <?php echo (in_array('deletePricing', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Homecard</td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="createHomecard" <?php echo (in_array('createHomecard', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateHomecard" <?php echo (in_array('updateHomecard', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewHomecard" <?php echo (in_array('viewHomecard', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteHomecard" <?php echo (in_array('deleteHomecard', $record))?'checked':'' ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Profile</td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProfile" <?php echo (in_array('updateProfile', $record))?'checked':'' ?>></td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Contacts</td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="viewContact" <?php echo (in_array('viewContact', $record))?'checked':'' ?>></td>
                                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteContact" <?php echo (in_array('deleteContact', $record))?'checked':'' ?>></td>
                                    </tr>
                                    </tbody>
                                </table>
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
@endsection
