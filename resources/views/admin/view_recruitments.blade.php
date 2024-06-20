@extends('admin.layout')
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

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico');}}">
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css');}}">
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/vendors.min.css');}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/dataTables.bs5.min.css');}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2.min.css');}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2-theme.min.css');}}">
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.min.css');}}">
@endsection

@section('content')
<form action="{{ route('dashboard') }}" method="POST">
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Notice</a></li>
            <li class="breadcrumb-item">View Notice</li>
        </ul>
    </div>
</div>
<div class="main-content">
    @if($errors->any())
    <div class="col-12">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    </div>
    @endif
    @if(session()->has('error'))
    <div class="col-8 alert alert-danger ms-auto me-auto">{{session('error')}}</div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card stretch stretch-full">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div id="leadList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row dt-row" data-select2-id="select2-data-9-l8c0">
                                <div class="col-sm-12" data-select2-id="select2-data-6-j9oc">
                                    <table class="table table-hover dataTable no-footer" id="leadList"
                                        aria-describedby="leadList_info" data-select2-id="select2-data-leadList">
                                        <thead>
                                            <tr>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Lead: activate to sort column ascending">
                                                    Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Phone: activate to sort column ascending">
                                                    Department</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Created Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Updated Date</th>
                                                <th class="text-center" tabindex="0" aria-controls="leadList"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody data-select2-id="select2-data-5-71uf">
                                            @if($all_notice)
                                            @foreach($all_notice as $notice)
                                            <tr class="single-item odd" data-select2-id="select2-data-4-8ka4">
                                                <td>
                                                    <a href="#" class="hstack gap-3">
                                                        <!-- <div class="avatar-image avatar-md bg-primary text-white">
                                                                    E
                                                                </div> -->
                                                        <div>
                                                            <span
                                                                class="text-truncate-1-line">{{ $notice->title }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>{{ $notice->department }}
                                                </td>
                                                <td>{{ $notice->created_at }}</td>
                                                <td>{{ $notice->updated_at }}</td>

                                                <td>
                                                    @if (is_null($notice->url))
                                                    <a href="{{ url('/admin/inside/'.$notice->id) }}" class="btn btn-primary">
                                                                <span>View</span>
                                                            </a>
                                                    @else
                                                    <a href="{{ $notice->url }}" target=”_blank”
                                                        class="btn btn-primary">
                                                        <span>URL</span>
                                                    </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            @endif
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="{{asset('assets/js/leads-init.min.js');}}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/dataTables.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/dataTables.bs5.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/select2.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/select2-active.min.js');}}"></script>



@endsection