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
<div class="main-content">
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
    <form action="{{route('added_notice')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="col-lg-12">
            <div class="card border-top-0">
                <div class="card-body personal-info">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0 me-4">
                            <span class="d-block mb-2">Notice:</span>
                            <span class="fs-12 fw-normal text-muted text-truncate-1-line">Following information is
                                publicly displayed, be careful! </span>
                        </h5>

                    </div>

                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="fw-semibold">Title: </label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-text"></div>
                                <input type="text" name="title" class="form-control" id="fullnameInput"
                                    placeholder="Enter title">
                            </div>
                        </div>
                    </div>


                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-4">
                            <label for="phoneInput" class="fw-semibold">Department: </label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-text"></div>
                                <input type="text" name="department" class="form-control" id="phoneInput"
                                    placeholder="Enter department">
                            </div>
                        </div>
                    </div>


                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-4">
                            <label for="designationInput" class="fw-semibold">Type: </label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control " data-select2-selector="status"
                                data-select2-id="select2-data-46-bs27" tabindex="-1" aria-hidden="true" name="type">
                                @foreach($dataa as $detail)
                                <option value="{{$detail->type_id}}" data-bg="bg-success" selected=""
                                    data-select2-id="select2-data-48-emuu">{{$detail->type_value}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-4">
                            <label for="phoneInput" class="fw-semibold">URL(optional): </label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-text"></div>
                                <input type="text" name="url" class="form-control" id="phoneInput"
                                    placeholder="Enter url">
                            </div>
                        </div>
                    </div>



                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-4">
                            <label for="designationInput" class="fw-semibold">File: </label>
                        </div>
                        <div class="col-lg-8">
                            <div class="flexx d-flex">
                                <div class="">
                                    <input name="file[]" type="file" multiple>
                                </div>





                            </div>
                        </div>

                    </div>


                    <div class="col-4 mt-auto mb-auto ms-auto me-auto">
                        <input class="col-lg-6 col-sm-6 row ms-auto me-auto btn btn-primary" type="submit"
                            id="commentSwitch" value="Add">
                    </div>
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