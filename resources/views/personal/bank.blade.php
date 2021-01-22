@extends('layouts.personal_default')
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
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                       Bank
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="{{ route('personal_profile.bank.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Bank Name
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="inputAddress4"
                                            placeholder=" Bank Name" name="bank_name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Account Holder Name
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="bankaccountname"
                                            placeholder="Account Holder Name" name="holder_name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Account Number
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="inputAddress4"
                                            placeholder=" Account Number" name="bank_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Bank Swift Code
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="inputAddress4"
                                            placeholder="Bank Swift Code" name="swift_code" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="iban" class="col-md-3 control-label">
                                    IBAN
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="iban"
                                            placeholder="IBAN" name="iban" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                    <div class="row">
                        <?php $i = 0;?>
                        @if($bank)
                            @foreach($bank as $temp)
                                <?php $i++;?>
                                <div class="col-md-4">
                                    <h5 style="text-align:center;">Bank {{$i}}</h5>
                                    <p style="text-align:center; color:black;background-color:gray;">Bank Name: {{$temp->bank_name}}</p>
                                    <p style="text-align:center;background-color:gray;color:black;">Account Holder Name: {{$temp->holder_name}}</p>
                                    <p style="text-align:center;background-color:gray;color:black;">Account Number: {{$temp->bank_number}}</p>
                                    <p style="text-align:center;background-color:gray;color:black;"> Bank Swift Code: {{$temp->swift_code}}</p>
                                    <p style="text-align:center;background-color:gray;color:black;">IBAN: {{$temp->iban}}</p>
                                    <a href="{{ route('personal_profile.bank.delete',$temp->id)}}" style="color:black;">
                                        <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button>
                                    </a>
                                </div>
                            @endforeach
                        @endif
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
<script>
    function avatar(){
        alert("hello");
        document.getElementById("avatar").click();
    }
</script>
<!-- end of page level js -->
@stop
