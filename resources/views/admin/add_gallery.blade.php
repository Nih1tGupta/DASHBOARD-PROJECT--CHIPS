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
            <h5 class="m-b-10">Add Gallery</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            <li class="breadcrumb-item">Add Gallery</li>
        </ul>
           
    </div>
</div>
<div class="main-content mb-12">

    <div class="mt-1">
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

    <div class="row ">

        <form action="{{route('add_gallery_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 ">
                <div class="card border-top-0">
                    <div class="card-body personal-info">
                        <div class="mb-4 d-flex justify-content-center">
                            <h5 class="fw-bold mb-0 me-4">
                                <span class="d-block mb-2 ">Personal Information:</span>
                                <span class="fs-12 fw-normal text-muted text-truncate-1-line ">Following
                                    information is publicly displayed, be careful! </span>
                            </h5>

                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-2">
                                <label for="fullnameInput" class="fw-semibold">Name: </label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-user"></i></div>

                                    <input type="text" name="name" class="form-control" id="fullnameInput"
                                        placeholder="Name">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-2">
                                <label for="fullnameInput" class="fw-semibold">Attachment: </label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group">

                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary  w-25 mb-4 ms-auto me-auto">Submit</button>
                </div>

            </div>
    </div>

    </form>
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