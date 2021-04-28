@extends('layouts.default')
{{-- Page title --}}
@section('title')
Tourist Pass @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Gym Tourist Pass</h4>
                                </div>
                            </div>
                             @if (Session::get('success'))
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>
                            
                                @endif
                        </div>
                       
                        <div class="widget-content widget-content-area">
                            <form  action="{{ route('publish_tourist')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Price</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example: US $10" name="price" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Duration</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  placeholder="Example: 1 day" name="duration" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Facility</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Access" name="facility" required>
                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Publish">
                                
                            </form>
                            <hr>
                            <div class="row mt-3">
                                <?php $i = 0;?>
                                @if($touristpass)
                                @foreach($touristpass as $temp)
                                <?php $i++;?>
                               <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 mb-3">
                                    
                                    <div class="card component-card_1" style="width: 100%!important;">
                                        <div class="card-body">
                                            
                                            <h5 class="card-title">Tourist Pass {{$i}}</h5>
                                            <p style="text-align:center; color:black;background-color:gray;"> Price:   {{$temp->price}}</p>

                                            <p style="text-align:center;background-color:black;color:white;">Duration: {{$temp->duration}}</p>

                                            <p style="text-align:center;background-color:lightblue;color:black;">Facility: {{$temp->facility}}</p>

                                            <a href="{{ route('touristpass.delete',$temp->id)}}" style="color:black;">

                                            <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
