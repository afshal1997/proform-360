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
                            <div
                                class="clearfix"></div>
                        </div>
                        <div
                            class="pull-right">
                            <a class="btn btn-primary"
                               href="{{ url('admin/'.request()->segment(2).'/form/add') }}">Add</a>
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
                                                    {{ ucwords(str_replace('_',' ','id')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','category_name')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','sub_categories')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','sort_order')) }}
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
                                <th>{{ucwords(str_replace('_',' ','image'))}}</th>
                                <td id="image" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','category_name'))}}</th>
                                <td id="name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','meta_tag_title'))}}</th>
                                <td id="meta_tag_title" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','meta_tag_description'))}}</th>
                                <td id="meta_tag_description" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','meta_tag_keywords'))}}</th>
                                <td id="meta_tag_keywords" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','sort_order'))}}</th>
                                <td id="sort_order" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','type'))}}</th>
                                <td id="type" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','description'))}}</th>
                                <td id="description" align="center"></td>
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
    <script
        src="{{asset('assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script
        src="{{asset('assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/vfs_fonts.js')}}"></script>
    <script>
        $(document).ready(function () {
            var source = `{{ !empty(\request()->get('id')) ? route(request()->segment(2),['id' => \request()->get('id')]) : route(request()->segment(2)) }}`;
            var DataTable = $("#example1").DataTable({
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
                    url: source,
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
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'sub_categories',
                        name: 'sub_categories',
                        orderable: false
                    },
                    {
                        data: 'sort_order',
                        name: 'sort_order'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]

            });

            // View Records
            $(document, this).on('click', '.view', function () {
                let id = $(this).attr('id');
                $.ajax({
                    url: `{{url('admin/'.request()->segment(2).'/view/')}}/${id}`,
                    dataType: "json",
                    success: function (data) {
                        let image = (data.image != undefined) ? `{{ asset('/') }}${data.image}` : `{{asset('assets/admin/images/placeholder.png')}}`;
                        document.getElementById('image').innerHTML = `<img width="100" src="${image}" alt="${data.image}">`;
                        document.getElementById('name').innerText = data.name;
                        document.getElementById('meta_tag_title').innerText = data.meta_tag_title;
                        document.getElementById('meta_tag_description').innerText = data.meta_tag_description;
                        document.getElementById('meta_tag_keywords').innerText = data.meta_tag_keywords;
                        document.getElementById('sort_order').innerText = data.sort_order;
                        document.getElementById('type').innerText = data.type;
                        document.getElementById('description').innerHTML = data.description;
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
