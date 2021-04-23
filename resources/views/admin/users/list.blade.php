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
                               href="{{route('user.register')}}">Register</a>
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
                                                    {{ ucwords(str_replace('_',' ','image')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','first_name')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','last_name')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','email')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','phone')) }}
                                                </th>
                                                <th>
                                                    {{ ucwords(str_replace('_',' ','date_of_birth')) }}
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
                                <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>
                                <td id="first_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','last_name'))}}</th>
                                <td id="last_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                <td id="email" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','phone'))}}</th>
                                <td id="phone" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','date_of_birth'))}}</th>
                                <td id="date_of_birth" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','facebook'))}}</th>
                                <td id="facebook" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','instagram'))}}</th>
                                <td id="instagram" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','twitter'))}}</th>
                                <td id="twitter" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','about'))}}</th>
                                <td id="about" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','address'))}}</th>
                                <td id="address" align="center"></td>
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
                    url: `{{route(request()->segment(2))}}`,
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
                        data: 'image',
                        name: 'image',
                        orderable: false
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'date_of_birth',
                        name: 'date_of_birth'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]

            });

            // View Users
            $(document).on('click', '.view', function () {
                let id = $(this).attr('id');
                fetch(`{{url('admin/'.request()->segment(2).'/view/')}}/${id}`)
                    .then(response => response.json())
                    .then((data) => {
                        let image = (data.image != undefined) ? `{{asset('/')}}${data.image}` : `{{asset('assets/admin/images/profile.jpg')}}`;
                        document.getElementById('image').innerHTML = `<img width="100" src="${image}" alt="${data.image}">`
                        document.getElementById('name').innerText = data.name;
                        document.getElementById('email').innerText = data.email;
                        document.getElementById('phone').innerText = data.phone;
                        document.getElementById('date_of_birth').innerText = data.date_of_birth;
                        document.getElementById('facebook').innerText = data.facebook;
                        document.getElementById('instagram').innerText = data.instagram;
                        document.getElementById('twitter').innerText = data.twitter;
                        document.getElementById('about').innerHTML = data.about;
                        document.getElementById('address').innerHTML = data.address;
                        $('#viewModal').modal('show');
                    })
            })

            // Delete Users
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
                                DataTable.ajax.reload();
                                js_success(r)
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
