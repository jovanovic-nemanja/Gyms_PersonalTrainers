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

        <h1>Dashboard</h1>



    </div>

    <div class="separator-breadcrumb border-top"></div>

</section>

<!-- /.content -->

<section class="content">

    <div class="row">

        <div class="col-md-6 col-xl-3 col-12 mb-20">

            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Add-Cart im-icon-set float-right bg-primary"></i>

                <h3>{{$num_gym}}</h3>

                <p>Number of Gyms</p>

            </div>

        </div>



        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>

                <h3>{{$num_tra}}</h3>

                <p>Personal Trainers</p>

            </div>

        </div>



        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>

                <h3>{{$num_touri}}</h3>

                <p>Tourist Passes</p>

            </div>

        </div>





        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>

                <h3>{{$num_memship}}</h3>

                <p>Membership Plans</p>

                </p>

            </div>

        </div>

    </div>





    <div class="row">

        <div class="col-xl-12 col-12 mt-20 ">

            <div class="bg-white dashboard-col">

                <h5 class="card-header">New Registered Users</h5>

                {{--<div class="card">--}}

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>

                            <tr>

                                <th scope="col">Name</th>

                                <th scope="col">Picture</th>

                                <th scope="col">Email Address</th>

                                <th scope="col">Web site</th>

                                <th scope="col">Role</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($users as $temp)

                            <tr>

                                <td>{{$temp->name}}</td>

                                @if($temp->avatar)

                                <td><img src="{{asset($temp->avatar)}}" alt="image missing"

                                        class="rounded-circle img-size"></td>

                                @else

                                <td><img src="{{asset('img/authors/user.jpg')}}" alt="image missing"

                                    class="rounded-circle img-size"></td>

                                @endif

                                <td>{{$temp->email}}</td>

                                <td>{{$temp->website}}</td>

                                @if($temp->role == 2)

                                <td><span class="badge badge-success float-left">Gym</span></td>

                                @elseif($temp->role == 3) <td><span class="badge badge-danger float-left">Personal</span></td>

				@else <td><span class="badge badge-primary float-left">Administrator</span></td>
		
                                @endif





                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>



            </div>



            {{--</div>--}}

        </div>

    </div>

    {{--</div>--}}

</section>



@stop

@section('footer_scripts')

<!--   page level js ----------->

<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>

<script src="{{ asset('js/pages/dashboard.js') }}"></script>



<!-- end of page level js -->

@stop



