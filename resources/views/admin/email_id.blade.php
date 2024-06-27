@extends('admin.layout')
@section('title', 'View Notice')
@section('css')
<!--! END:  Apps Title-->
<!--! BEGIN: Favicon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico'); }}" />
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css'); }}" />
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css'); }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/daterangepicker.min.css');}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/dataTables.bs5.min.css'); }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css'); }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css'); }}">
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css');}}" />
<!--! END: Custom CSS-->
<!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
<!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
<!--[if lt IE 9]>
    <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@endsection
@section('content')

<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">View E- Mail</h5>
        </div>

    </div>
</div>
<div class="main-content">

    <div class="row">
        <div class="">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="text-align-left">
                        <div class="">

                            <h4 class="card-title " style="text-align:left;">Sender's Name: <h6>{{ $detail->name }}</h6>
                            </h4>


                            <h4 class="card-title" style="text-align:left;">Sender's E-Mail: 
                            <h6>{{ $detail->email }}
                            </h6>
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h5 class="card-title" style="text-align:center;">Message</h5>
                </div>
                <div class="card-body">

                    <div class="d-flex align-items-center mb-3">
                        <div class="avatar-text bg-gray-100">
                            <i class="feather feather-paperclip"></i>
                        </div>
                        <span class="mx-2 text-gray-300">/</span>

                        <h5 class="card-title" style="text-align:center;">Message: {{ $detail->message }}</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{ asset('assets/vendors/js/dataTables.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/dataTables.bs5.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/leads-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection