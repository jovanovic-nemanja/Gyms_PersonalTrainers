@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">
<style>
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: 10px;
        position: relative;
        z-index: 50;
    }
</style>


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
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                       Change Password
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <label for="Password" class="col-md-3 control-label">
                                    New Password
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </span>
                                        </span>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="New Password" name="password" required>
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="confirmPass" class="col-md-3 control-label">
                                    Confirm Password
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </span>
                                        </span>
                                        <input type="password" class="form-control" id="confirmPass"
                                            placeholder="Confirm Password" name="confirmPass" required>
                                        <span toggle="#confirmPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-sm btn-primary" onclick="submit_pass()">Submit</button>
                        </div>
                    </form>
                    <!-- Modal -->
                    <button type="button" class="btn btn-sm btn-primary" hidden data-toggle="modal" data-target="#exampleModal" id="showmodal">Submit</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header mt-0">
                               <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body" id="modal_body">
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-primary" data-dismiss="modal">OK
                               </button>
                               {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                           </div>
                       </div>
                   </div>
               </div>
                </div>
            </div>
        <div class="col-lg-2 col-md-4"></div>
    </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<!-- end of page level js -->
<script>
    function submit_pass() {
        if ($("#password").val()!="" && $("#confirmPass").val()!="") {
         
            if ($("#password").val() == $("#confirmPass").val()) {
                $.ajax({
                    url: "{{ route('admin.save_pass') }}",
                    type:'post',
                    data: {
                            _token : $('meta[name="csrf-token"]').attr('content'),
                            id: {{$user_id}},
                            newPass:$("#password").val(),
                            confirmPass:$("#confirmPass").val()
                        },
                    
                    success: function(data){
                        var res = JSON.parse(data);
                        console.log(res.res);
                        if (res.res) {
                            $("#password").val("");
                            $("#confirmPass").val("");
                            $("#modal_body").text("Password changed.");
                            $('#showmodal').click();
                        }
                        
                    }
                });
            }

            else {
                $("#modal_body").text("No match new password."); 
                $('#showmodal').click();
            }
        }
        else {
            $("#modal_body").text("Please fully enter all fields.");
            $('#showmodal').click();
        }
    }
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    function show_modal() {
        $("#alert1").show();
        $('#showmodal').click();
    }
</script>
@stop
