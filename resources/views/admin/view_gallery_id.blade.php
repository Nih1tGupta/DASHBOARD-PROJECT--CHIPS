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
            <li class="breadcrumb-item"><a href="#"> {{$curr_gallery->gallery_id}}</a></li>
            <li class="breadcrumb-item">{{$curr_gallery->gallery_name}}</li>
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
    alert alert-danger ms-auto me-auto">{{session('error')}}
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<div class="row">
    <div class="col-xxl-10 col-md-10 ms-auto me-auto" data-select2-id="select2-data-6-ktob">
        <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
            <div class="card-body" data-select2-id="select2-data-4-c1qo">
                <form action="{{ url('admin/view_gallery/'.$curr_gallery->gallery_id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8 step-body mt-2 body current" id="project-create-steps-p-6" role="tabpanel"
                            aria-labelledby="project-create-steps-h-6" aria-hidden="false" style="left: 0px;">
                            <div class="flexx d-flex">
                            <div class="">
                                <label for="choose-file" class="text-center " id="choose-file-label" style="width: 50rem;">
                                    Add new image</label>
                                <input style="display:none;" type="number" name="id" value="{{ $id }}">
                                <input name="thumbnail[]" type="file" multiple>
                            </div>
                             


                        
                        <div class="col-4 mt-auto mb-auto">
                            <input class="col-lg-6 col-sm-6 row ms-auto me-auto btn btn-primary" type="submit"
                                id="commentSwitch" value="Add">
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @if($all)
    @foreach($all as $photo)
    @if($photo->gallery_id == $id)
    <div class="col-xxl-4 col-lg-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset($photo->photo_url) }}" alt="Card image cap">
        </div>
    </div>
    @endif
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