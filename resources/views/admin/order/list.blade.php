@extends('admin.layout.webapp')
@section('page_css')
    <!-- Datatables -->
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">
@endsection
@section('content')
    <div
        class="right_col"
        role="main">
        <div
            class="">
            <div
                class="page-title">
                <div
                    class="title_left">
                    <h3>{{ !empty($title)?$title:'' }}
                        <small>View</small>
                    </h3>
                </div>
            </div>
            <div
                class="clearfix"></div>
            <div
                class="row">
                <div
                    class="col-md-12 col-sm-12 ">
                    <div
                        class="x_panel">
                        <div
                            class="x_title">
                            <h2>{{ !empty($title)?$title:'' }}
                                <small>View</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i
                                            class="fa fa-chevron-up"></i></a>
                                </li>
                                <li>
                                    <a class="close-link"><i
                                            class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label" for="order_id">Order ID</label>
                                        <input type="number" name="order_id" value="" placeholder="Order ID" id="order_id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="first_name">Customer</label>
                                        <input type="text" name="first_name" value="" placeholder="Customer" id="first_name" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label" for="order_status">Order Status</label>
                                        <select name="order_status" id="order_status" class="form-control">
                                            <option value="">Select Order Status</option>
                                            <option value="Missing Orders">Missing Orders</option>
                                            <option value="Canceled">Canceled</option>
                                            <option value="Canceled Reversal">Canceled Reversal</option>
                                            <option value="Chargeback">Chargeback</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Denied">Denied</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Failed">Failed</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Processed">Processed</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Refunded">Refunded</option>
                                            <option value="Reversed">Reversed</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Voided">Voided</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="total_amount">Total</label>
                                        <input type="text" name="total_amount" value="" placeholder="Total" id="total_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label" for="created_at">Created At</label>
                                        <div class="input-group date">
                                            <input type="date" name="created_at" value="" id="created_at" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="updated_at">Updated At</label>
                                        <div class="input-group date">
                                            <input type="date" name="updated_at" value="" id="updated_at" class="form-control">
                                        </div>
                                    </div>
                                    <button type="button" title="Filter" id="buttonFilter" class="btn btn-primary pull-right"><i class="fa fa-filter"></i></button>
                                    <button type="button" title="Reset" id="button-filter" class="btn btn-info pull-right"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="x_content">
                            <div
                                class="row">
                                <div
                                    class="col-sm-12">
                                    <div
                                        class="card-box table-responsive">
                                        <table
                                            id="example1"
                                            class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                            <button
                                                type="button"
                                                class="btn btn-danger btn-xs"
                                                id="delete_all">
                                                Delete
                                            </button>
                                            <tr>
                                                <th width="10">
                                                    <input
                                                        type="checkbox"
                                                        id="select_all">All
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','order_id')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','customer')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','status')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','total')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','created_at')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','updated_at')) }}
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="action-buttons">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="viewModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #343a40;
				color: #fff;">
                    <h4 class="modal-title">View {{ucwords(str_replace('_',' ',request()->segment(2)))}}</h4>
                    <button type="button" class="close" data-dismiss="modal" style="    color: #fff;">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','name'))}}</th>
                                <td id="name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','code'))}}</th>
                                <td id="code" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','symbol'))}}</th>
                                <td id="symbol" align="center"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #343a40;
				color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="{{asset('assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/vfs_fonts.js')}}"></script>
    <script>
        $(document).ready(function () {
            const fill_datatable = (filter = {}) => {
                console.log(filter)
                $("#example1").DataTable({
                    dom: "Blfrtip",
                    buttons: [{
                        extend: "copy",
                        className: "btn-sm"
                    }, {
                        extend: "csv",
                        className: "btn-sm"
                    }, {
                        extend: "excel",
                        className: "btn-sm"
                    }, {
                        extend: "pdfHtml5",
                        className: "btn-sm"
                    }, {
                        extend: "print",
                        className: "btn-sm"
                    }],
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    pageLength: 10,
                    ajax: {
                        url: `{{ route(request()->segment(2)) }}`,
                        data: filter
                    },
                    columns: [
                        {
                            data: 'checkbox',
                            name: 'checkbox',
                            orderable: false
                        },
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'first_name',
                            name: 'first_name'
                        },
                        {
                            data: 'order_status',
                            name: 'order_status'
                        },
                        {
                            data: 'total_amount',
                            name: 'total_amount'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        }
                    ]

                });
            }
            fill_datatable();

            document.getElementById('buttonFilter').addEventListener('click',() => {
                let filter = {
                    order_id: (document.getElementById('order_id').value !== '') ? document.getElementById('order_id').value : '',
                    order_status: (document.getElementById('order_status').value !== '') ? document.getElementById('order_status').value : '',
                    created_at: (document.getElementById('created_at').value !== '') ? document.getElementById('created_at').value : '',
                    first_name: (document.getElementById('first_name').value !== '') ? document.getElementById('first_name').value : '',
                    total_amount: (document.getElementById('total_amount').value !== '') ? document.getElementById('total_amount').value : '',
                    updated_at: (document.getElementById('updated_at').value !== '') ? document.getElementById('updated_at').value : '',
                }
                if (typeof filter === 'object' && (filter.order_id !== '' || filter.order_status !== '' || filter.created_at !== '' || filter.first_name !== '' || filter.total_amount !== '' || filter.updated_at !== '' )) {
                    $("#example1").DataTable().destroy();
                    fill_datatable(filter)
                }
                else {
                    js_error('Select Filter Options');
                }

            })

            // View Records
            $(document, this).on('click', '.view', function () {
                let id = $(this).attr('id');
                $.ajax({
                    url: `{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,
                    dataType: "json",
                    success: function (data) {
                        document.getElementById('name').innerText = data.name;
                        document.getElementById('code').innerText = data.code;
                        document.getElementById('symbol').innerText = data.symbol;
                        $("#viewModal").modal('show');
                    }
                })
            })
            var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                $.ajax({
                    type: "delete",
                    url: `{{url('admin/'.request()->segment(2).'/destroy/')}}/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled", true);
                    },
                    success: function (data) {
                        DataTable.ajax.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled", false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });

            document.getElementById('select_all').addEventListener('click', event =>
                (event.target.checked === true) ? Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = true
                ) : Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = false
                )
            );
            document.getElementById('delete_all').addEventListener('click', () => {
                let checkboxes = Array.from(document.querySelectorAll('.delete_checkbox:checked'));
                if (checkboxes.length > 0) {
                    var checkboxValue = [];
                    checkboxes.forEach((e) => {
                        checkboxValue.push(e.getAttribute('value'));
                    });
                    let ajax = async () => {
                        await fetch(`{{route(request()->segment(2).'.delete_all')}}`, {
                            method: "post",
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({checkboxValue: checkboxValue}),
                        })
                            .then(r => r.json())
                            .then((r) => {
                                js_success(r);
                                DataTable.ajax.reload();
                            });
                    };
                    ajax();
                } else {
                    js_error("Select atleast one record");
                }
            });
        });
    </script>
@endsection
