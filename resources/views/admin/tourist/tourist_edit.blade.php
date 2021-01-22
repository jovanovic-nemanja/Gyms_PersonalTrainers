@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">


<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>My Profile</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <!-- membership-->
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                        TOURIST PASS
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update_tourist')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 style="height:50px;">Price</h5>
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="hidden" class="form-control" id="inputUsername3"  name="userid" value={{$id}}>
                                                <input type="text" class="form-control" placeholder="Example: US $10" id="inputUsername3" 
                                                name="price" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 style="height:50px;">Duration</h5>
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Calendar-4"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Example: 1 day" id="inputUsername3" 
                                                name="duration" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 style="height:50px;">Facility</h5>
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Full Access" id="inputUsername3" 
                                                name="facility" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-primary">Publish</button>
                        </div>
                    </form>
                    <div class="row">
                        <?php $i = 0;?>
                        @if($touristpass)
                            @foreach($touristpass as $temp)
                                <?php $i++;?>
                                <div class="col-lg-3">
                                    <h5 style="text-align:center;">Tourist Pass {{$i}}</h5>
                                    
                                    <p style="text-align:center; color:black;background-color:gray;"> Price:   {{$temp->price}}</p>
                                    <p style="text-align:center;background-color:black;color:white;">Duration: {{$temp->duration}}</p>
                                    <p style="text-align:center;background-color:lightblue;color:black;">Facility: {{$temp->facility}}</p>
                                    <a href="{{ route('admin.tourist_delete',$temp->id)}}" style="color:black;">
                                    <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button></a>
                                </div>
                                <div class="col-1"></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        <div class="col-lg-1"></div>
    </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<script>
    function avatar(){
        alert("hello");
        document.getElementById("avatar").click();
    }
</script>
<!-- end of page level js -->
@stop
