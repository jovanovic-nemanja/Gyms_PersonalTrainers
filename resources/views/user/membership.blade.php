@extends('layouts.default')
{{-- Page title --}}
@section('title')
Membership Plans @parent
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
                                    <h4>Membership Plans</h4>
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
                            <form  action="{{ route('membership')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Price</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Price" name="price" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Duration</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Duration" name="duration" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Service</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Service" name="service" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Additional Perk</label>
                                    <textarea class="form-control" name="perk" placeholder="Additional Perk" rows="3" required></textarea>
                                </div>
                               
                                <div class="custom-control custom-checkbox">
                                    
                                    <div class="row">
                                       
                                        <div class="col-lg-12">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="app" value="app">
                                                <span class="new-control-indicator"></span> App Exclusive
                                            </label>
                                        </div>                                          
                                        
                                    </div>                                
                                    

                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Publish Offer">
                                
                            </form>
                            <hr>
                            <div class="row mt-3">
                                <?php $i = 0;?>
                                @if($membership)
                                @foreach($membership as $temp)
                                <?php $i++;?>
                                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 mb-3">
                                    
                                    <div class="card component-card_1" style="width: 100%!important;">
                                        <div class="card-body">
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                            @if($temp->app=="app")
                                                <?php $i--;?>
                                                <h5 class="card-title">App exclusive</h5>
                                            @else
                                                <h5 class="card-title">PLAN {{$i}}</h5>
                                            @endif
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <i></i>
                                                    <a href="{{ route('membership.edit',$temp->id)}}">
                                                    <i data-feather="edit"></i>Edit
                                                      
                                                    </a>
                                                </div>
                                            </div>
                                            <p style="text-align:center; color:black;background-color:gray;"> Price:   {{$temp->price}}</p>
                                            <p style="text-align:center;background-color:black;color:white;">Duration: {{$temp->duration}}</p>
                                            <p style="text-align:center;background-color:lightblue;color:black;">Service: {{$temp->service}}</p>
                                            <p style="text-align:center;background-color:lightgreen;color:black;">Additional Perk: {{$temp->perk}}</p>
                                            <a href="{{ route('membership.delete',$temp->id)}}" style="color:black;">
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
