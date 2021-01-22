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
        <h1>Create Membership Plans</h1>

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
                       MEMBERSHIP
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="{{ route('membership')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                                <div class="form-group pad-top40">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Price
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Price" id="inputUsername3" 
                                                name="price" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <label for="pricelabel" class="col-md-2 control-label">
                                        Duration
                                    </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Calendar-4"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Duration" id="inputUsername3" 
                                                name="duration" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Service
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Service" id="inputUsername3" 
                                                name="service" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Additional Perk
                                        </label>
                                        <div class="col-md-5">
                                            {{-- <div class="input-group"> --}}
                                                {{-- <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Trophy"></i></span>
                                                </span> --}}
                                                <textarea class="form-control resize_vertical" id="message1" name="perk" placeholder="Additional Perk" rows="3" required></textarea>
                                                {{-- <input type="text" class="form-control" placeholder="Additional Perk" id="perk" 
                                                name="perk" required> --}}
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            App Exclusive
                                        </label>
                                        <div class="col-md-5">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="incustomCheck19" name="app" value="app">
                                                <label class="custom-control-label" for="incustomCheck19">App</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-success">Publish Offer</button>
                        </div>
                    </form>
                    <div class="row">
                        
                        <?php $i = 0;?>
                        @if($membership)
                            @foreach($membership as $temp)
                                <?php $i++;?>
                                <div class="col-lg-3">
                                    @if($temp->app=="app")
                                        <?php $i--;?>
                                        <h5 style="text-align:center;">App exclusive</h5>
                                    @else
                                        <h5 style="text-align:center;">PLAN {{$i}}</h5>
                                    @endif
                                    <p style="text-align:center; color:black;background-color:gray;"> Price:   {{$temp->price}}</p>
                                    <p style="text-align:center;background-color:black;color:white;">Duration: {{$temp->duration}}</p>
                                    <p style="text-align:center;background-color:lightblue;color:black;">Service: {{$temp->service}}</p>
                                    <p style="text-align:center;background-color:lightgreen;color:black;">Additional Perk: {{$temp->perk}}</p>
                                    <a href="{{ route('membership.delete',$temp->id)}}" style="color:black;">
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
