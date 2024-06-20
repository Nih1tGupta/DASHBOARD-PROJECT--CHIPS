@extends('admin.layout')
@section('title','BC')

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

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico');}}" />
<!--! END: Favicon-->
<!--! BEGIN: Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css');}}" />
<!--! END: Bootstrap CSS-->
<!--! BEGIN: Vendors CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/vendors.min.css');}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/daterangepicker.min.css');}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2.min.css');}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/select2-theme.min.css');}}" />
<!--! END: Vendors CSS-->
<!--! BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.min.css');}}" />

@endsection
@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card stretch stretch-full">
                <div class="card-header">
                    <h5 class="card-title">Top Country</h5>
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
                <div class="card-body" style="position: relative;">
                    <div id="click-by-country-donut" class="d-flex align-items-center justify-content-center"
                        style="min-height: 249.073px;">

                    </div>
                    <hr class="border-dashed mt-1 mb-3">
                    <div class="hstack justify-content-between">
                        <div class="hstack">
                            <div class="me-3">
                                <i class="fi fi-au"></i>
                            </div>
                            <a href="javascript:void(0);">
                                <span>Australia</span>
                                <i class="feather feather-link-2 fs-10 ms-1"></i>
                            </a>
                        </div>
                        <div class="fs-11 fw-medium text-uppercase text-muted">2,258 Clicks</div>
                    </div>
                    <hr class="border-dashed my-3">
                    <div class="hstack justify-content-between">
                        <div class="hstack">
                            <div class="me-3">
                                <i class="fi fi-us"></i>
                            </div>
                            <a href="javascript:void(0);">
                                <span>United State</span>
                                <i class="feather feather-link-2 fs-10 ms-1"></i>
                            </a>
                        </div>
                        <div class="fs-11 fw-medium text-uppercase text-muted">2,025 Clicks</div>
                    </div>
                    <hr class="border-dashed my-3">
                    <div class="hstack justify-content-between">
                        <div class="hstack">
                            <div class="me-3">
                                <i class="fi fi-bd"></i>
                            </div>
                            <a href="javascript:void(0);">
                                <span>Bangladesh</span>
                                <i class="feather feather-link-2 fs-10 ms-1"></i>
                            </a>
                        </div>
                        <div class="fs-11 fw-medium text-uppercase text-muted">1,836 Clicks</div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 905px; height: 451px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 965px; height: 451px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 965px; height: 451px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6">
            <div class="card stretch stretch-full">
                <div class="card-header">
                    <h5 class="card-title">Leads Overview</h5>
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
                <div class="card-body custom-card-action" style="position: relative;">
                    <div id="leads-overview-donut" style="min-height: 265.902px;">

                    </div>
                    <div class="row g-2">
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #3454d1"></span>
                                <span>New<span class="fs-10 text-muted ms-1">(20K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #0d519e"></span>
                                <span>Contacted<span class="fs-10 text-muted ms-1">(15K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #1976d2"></span>
                                <span>Qualified<span class="fs-10 text-muted ms-1">(10K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #1e88e5"></span>
                                <span>Working<span class="fs-10 text-muted ms-1">(18K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #2196f3"></span>
                                <span>Customer<span class="fs-10 text-muted ms-1">(10K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #42a5f5"></span>
                                <span>Proposal<span class="fs-10 text-muted ms-1">(15K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #64b5f6"></span>
                                <span>Leads<span class="fs-10 text-muted ms-1">(16K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #90caf9"></span>
                                <span>Progress<span class="fs-10 text-muted ms-1">(14K)</span></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);"
                                class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                <span class="wd-7 ht-7 rounded-circle d-inline-block"
                                    style="background-color: #aad6fa"></span>
                                <span>Others<span class="fs-10 text-muted ms-1">(10K)</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 905px; height: 450px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 50
                    Min Ago</a>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

<script src="{{ asset('assets/vendors/js/vendors.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/apexcharts.min.js'); }}"></script>
<!-- vendors.min.js {always must need to be top} -->
<script src="{{ asset('assets/vendors/js/circle-progress.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js'); }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js'); }}"></script>
<!--! END: Vendors JS !-->
<!--! BEGIN: Apps Init  !-->
<script src="{{ asset('assets/js/common-init.min.js'); }}"></script>
<script src="{{ asset('assets/js/widgets-charts-init.min.js'); }}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{ asset('assets/js/theme-customizer-init.min.js'); }}"></script>
<!--! END: Theme Customizer !-->
@endsection