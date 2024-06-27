
@extends('admin.layout')
@section('title', 'Tender Profile')
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
            <h5 class="m-b-10">Tender details</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item">Tender details</li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="row">
        <!--! BEGIN: [Profile] !-->
        <div class="col-xxl-5 col-lg-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                            <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                            </div>
                            <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle"
                                style="top: 76%; right: 10px">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="javascript:void(0);" class="fs-14 fw-bold d-block"> Alexandra Della</a>
                            <a href="javascript:void(0);"
                                class="fs-12 fw-normal text-muted d-block">alex.della@outlook.com</a>
                        </div>

                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i
                                    class="feather-map-pin"></i>Location</span>
                            <a href="javascript:void(0);" class="float-end">California, USA</a>
                        </li>
                        <li class="hstack justify-content-between mb-4">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-phone"></i>Phone</span>
                            <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                        </li>
                        <li class="hstack justify-content-between mb-0">
                            <span class="text-muted fw-medium hstack gap-3"><i class="feather-mail"></i>Email</span>
                            <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                        </li>
                    </ul>
                    <div class="mx-auto d-flex gap-2 text-center pt-4">
                        <!-- <a href="javascript:void(0);" class="w-50 btn btn-light-brand">
                            <i class="feather-trash-2 me-2"></i>
                            <span>Delete</span>
                        </a> -->
                        <!-- <a href="javascript:void(0);" class="btn btn-primary mt-2 d-inline-block mx-auto">
                            <i class="feather-user me-2"></i>
                            <span>View Profile</span>
                        </a> -->
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">Social</h5>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                data-bs-offset="25,25">
                                <i class="feather feather-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-lock me-3"></i>
                                        <span>Only Me</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-globe me-3"></i>
                                        <span>Everyone</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-users me-3"></i>
                                        <span>Anonymous</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-user-check me-3"></i>
                                        <span>People I Follow</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-eye me-3"></i>
                                        <span>People Follow Me</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather feather-settings me-3"></i>
                                        <span>Custom Selections Ever</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-text bg-gray-100">
                                <i class="feather feather-facebook"></i>
                            </div>
                            <span class="mx-2 text-gray-300">/</span>
                            <a href="https://www.facebook.com/wrapcoders" target="_blank"
                                class="text-truncate-1-line">https://www.facebook.com/<span
                                    class="text-muted">wrapcoders</span></a>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-text bg-gray-100">
                                <i class="feather feather-twitter"></i>
                            </div>
                            <span class="mx-2 text-gray-300">/</span>
                            <a href="https://www.twitter.com/wrapcoders" target="_blank"
                                class="text-truncate-1-line">https://www.twitter.com/<span
                                    class="text-muted">wrapcoders</span></a>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-text bg-gray-100">
                                <i class="feather feather-github"></i>
                            </div>
                            <span class="mx-2 text-gray-300">/</span>
                            <a href="https://www.github.com/wrapcoders" target="_blank"
                                class="text-truncate-1-line">https://www.github.com/<span
                                    class="text-muted">wrapcoders</span></a>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-text bg-gray-100">
                                <i class="feather feather-linkedin"></i>
                            </div>
                            <span class="mx-2 text-gray-300">/</span>
                            <a href="https://www.linkedin.com/wrapcoders" target="_blank"
                                class="text-truncate-1-line">https://www.linkedin.com/<span
                                    class="text-muted">wrapcoders</span></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="avatar-text bg-gray-100">
                                <i class="feather feather-youtube"></i>
                            </div>
                            <span class="mx-2 text-gray-300">/</span>
                            <a href="https://www.youtube.com/wrapcoders" target="_blank"
                                class="text-truncate-1-line">https://www.youtube.com/<span
                                    class="text-muted">wrapcoders</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-md-6" data-select2-id="select2-data-6-ktob">
            <div class="column">
                <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
                    <div class="card-body" data-select2-id="select2-data-4-c1qo">

                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Full Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Phone Number<span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Address">
                            </div>

                        </div>
                        <div class="row mb-2">
                            <input class="col-lg-6 row ms-auto me-auto btn btn-primary" type="submit"
                                id="commentSwitch">
                        </div>
                    </div>
                </div>
                <div class="card stretch-full ">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=90%25&amp;height=500&amp;hl=en&amp;q=21.233664,81.6611328+(Chhattisgarh%20Infotech%20Promotion%20Scoety)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.gps.ie/">gps devices</a></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{ asset('assets/vendors/js/circle-progress.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/widgets-lists-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection
