@extends('layouts.default')
{{-- Page title --}}
@section('title')
Advanced Data Tables @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{asset('vendors/datatables/css/buttons.bootstrap4.min.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" />--}}
<!--end of page vendors -->
@stop
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Users Table</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="card panel-info filterable">
                <div class="card-header bg-secondary text-white">
                    <h3 class="card-title d-inline">
                        Users
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>

                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table  table-bordered" id="table1" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>role</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $temp)
                            @if($temp->role!=1)
                            <tr>
                                <td>{{$temp->name}}</td>
                                <td>{{$temp->email}}</td>
                                <td>{{$temp->website}}</td>
                                <td> 
                                    @if($temp->role == 2) Gym
                                    @else Personal
                                    @endif
                                </td>
                                <td><a href="{{ route('admin.document_edit',$temp->id)}}" class="mr-3"> <i class="im im-icon-Pencil"></i> </a>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>










</section>
<!-- content end-->


@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/advanced_table.js') }}"></script>
<!-- end of page level js -->
@stop
