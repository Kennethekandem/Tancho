@extends('layouts.author')
    @section('css')
        <link href="{{ asset('authored/plugins/vendors/jsgrid/jsgrid.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('authored/plugins/vendors/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('authored/assets/css/style-2.css') }}" rel="stylesheet">
        <!-- Footable CSS -->
        <link href="{{ asset('authored/assets/css/pages/footable.core.css') }}" rel="stylesheet">
    @endsection
    @section('content')
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h6 class="card-subtitle m-t-15 text-muted">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h4 class="card-title text-uppercase m-b-0 pull-left">basic table</h4>
                                    {{--<div class="pull-right">--}}
                                        {{--<button class="btn btn-rounded btn-primary m-b-10">Add Member</button>--}}
                                    {{--</div>--}}
                                    <table id="example23"
                                           class="display nowrap table table m-t-30 table-hover2 contact-list footable-loaded footable">
                                        <thead>
                                        <tr class="table-header">
                                            <th>ID</th>
                                            <th>Title</th>
                                            {{--<th>Tag</th>--}}
                                            <th>Short Description</th>
                                            <th>Date Created</th>
                                            <th class="op-0 sorting">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $key => $blog)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td class="text-dark weight-600">
                                                    <a href="blog/{{ $blog->id }}">{{ $blog->title }}</a><br>
                                                </td>
                                                <td>{!! str_limit($blog->description, 40, '...') !!}</td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="blog/{{ $blog->id }}/edit" name="{{ $blog->id }}">Edit</a>
                                                        {{--<a class="dropdown-item" href="#">Send Message</a>--}}
                                                        {!! Form::open(['action' => ['BlogController@destroy', $blog->id], 'method' => 'POST']) !!}
                                                        {{ Form::hidden('_method', 'DELETE') }}
                                                        {{ Form::submit('Delete', ['class' => 'dropdown-item delete_blog'])}}
                                                        {!! Form::close() !!}
                                                        {{--<form action="">--}}
                                                            {{--<input type="hidden" value="{{ $blog->id }}" id="blog_id">--}}
                                                            {{--<button type="button" href="" class="dropdown-item" data-id="{{ $blog->id }}" id="delete_blog">Delete</button>--}}
                                                        {{--</form>--}}
                                                        {{--<a href="" id="delete_blog" class="dropdown-item" data-blogid="{{ $blog->id }}">Delete</a>--}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @endsection
    @section('js')
        <!-- ============================================================== -->
        <!-- This is data table -->
        <script src="{{ asset('authored/plugins/vendors/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            $(function () {
                $('#myTable').DataTable();
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 5
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 6,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });


                $('#myTable2').DataTable();
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 5
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 6,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });


                $('#myTable3').DataTable();
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 5
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 6,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });


            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        </script>
        <script>
            $(function () {
                $('#editable-datatable').DataTable();
            });
        </script>
        <!-- Popup message jquery -->
        <script src="{{ asset('authored/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>
        <!-- Style switcher -->
        <script src="{{ asset('authored/plugins/vendors/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <!-- Editable -->
        <script src="{{ asset('authored/plugins/vendors/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/tiny-editable/mindmup-editabletable.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/tiny-editable/numeric-input-example.js') }}"></script>
        <!-- JSgrid table JavaScript -->
        <script src="{{ asset('authored/plugins/vendors/jsgrid/db.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/jsgrid/jsgrid.min.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/jsgrid/jsgrid-data.js') }}"></script>
    @endsection