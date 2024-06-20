@extends('admin.layout')
@section('form2','Dashboard')


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
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2.min.css');}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2-theme.min.css');}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/datepicker.min.css');}}">
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.min.css');}}">
@endsection

@section ('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">View Gallery</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            <li class="breadcrumb-item">View Gallery</li>
        </ul>
           
    </div>
</div>

<div class="main-content">
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class=" alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
        <div class=" alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

    </div>

    <div class="row">
        <!-- if -->
        <!-- FOR -->
        @if($default)
        @foreach($default as $gallery)
        <div class="col-xxl-4 col-lg-6">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top  " style="height: 16rem; object-fit:cover;"
                    src="{{asset($gallery->thumbnail);}}" alt="Image" />
                <div class="card-body">
                    <h4 class="card-title">Name:{{$gallery->gallery_name}}</h4>
                    <p class="card-text font-weight-bold">{{$gallery->created_at}}</p>
                </div>
                <a href="{{url('admin/view_gallery/'.$gallery->gallery_id)}}" class="btn btn-primary btn-lg "
                    role="button" aria-disabled="true">View</a>
            </div>
        </div>

        @endforeach
        @endif
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