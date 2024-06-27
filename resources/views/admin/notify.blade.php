@extends('admin.layout')
@section('title','Dashboard')

@section('css')
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico');}}" />
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css');}}" />
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/vendors.min.css');}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/daterangepicker.min.css');}}" />
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.min.css');}}" />

@endsection
@section('content')
<div class="main-content">
    <div class="row">
        <div class="page-header">

            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Notifications</li>
                </ul>
                   
            </div>
        </div>



        <div class="col-xxl-8 col-md-6 ms-auto me-auto pt-2 ">
            <div class="card  stretch stretch-full">
                <div class="card-header">
                    <h5 class="card-title">Latest Leads</h5>
                    <div class="card-header-action">
                        <div class="card-header-btn">
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                    data-bs-toggle="remove"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                    data-bs-toggle="refresh"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                    data-bs-toggle="expand"> </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                data-bs-offset="25, 25">
                                <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                    <i class="feather-more-vertical"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-at-sign"></i>New</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-calendar"></i>Event</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-bell"></i>Snoozed</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-trash-2"></i>Deleted</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-settings"></i>Settings</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th scope="row">Name</th>
                                    <th>E-Mail</th>
                                    <th>Received</th>
                                    <!-- <th>Status</th> -->
                                    <th class="text-end">Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $detail)
                                <tr>
                                    <td>
                                        <div>
                                            <span class="text-truncate-1-line">{{$detail->name}}</span>
                                        </div>
                                    </td>

                                    <td>{{$detail->email}}</td>

                                    <td>{{$detail->created_at}}</a></td>

                                    <td class="text-end">
                                        <a class="btn btn-primary" href="{{url('/admin/email_id/'.$detail->message_id)}}" >View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('assets/vendors/js/vendors.min.js');}}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{asset('assets/vendors/js/daterangepicker.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/apexcharts.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/circle-progress.min.js');}}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{asset('assets/js/common-init.min.js');}}"></script>
<script src="{{asset('assets/js/dashboard-init.min.js');}}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/daterangepicker.min.js');}}"></script>
@endsection