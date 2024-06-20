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
<div class="main-content" data-select2-id="select2-data-37-p1dw">
    <div class="row" data-select2-id="select2-data-36-pmv8">
        <div class="col-lg-12" data-select2-id="select2-data-35-puim">
            <div class="card stretch stretch-full" data-select2-id="select2-data-20-mfu6">
                <div class="card-body p-0" data-select2-id="select2-data-19-sf9d">
                    <div class="table-responsive" data-select2-id="select2-data-18-gs4q">
                        <div id="leadList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"
                            data-select2-id="select2-data-leadList_wrapper">
                            <div class="row dt-row" data-select2-id="select2-data-17-aai8">
                                <div class="col-sm-12" data-select2-id="select2-data-16-kras">
                                    <!-- <div id="leadList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" -->
                                     
                                        <!-- <div class="row dt-row" data-select2-id="select2-data-15-bfs9">
                                            <div class="col-sm-12" data-select2-id="select2-data-14-sm7a"> -->
                                                <table class="table table-hover dataTable no-footer" id="leadList"
                                                    aria-describedby="leadList_info"
                                                    data-select2-id="select2-data-leadList">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30 sorting sorting_asc" tabindex="0"
                                                                aria-controls="leadList" rowspan="1" colspan="1"
                                                                aria-label="
                                                    
                                                        
                                                            
                                                            
                                                        
                                                    
                                                : activate to sort column descending" style="width: 30px;"
                                                                aria-sort="ascending">
                                                                <div class="btn-group mb-1">
                                                                    <div class="custom-control custom-checkbox ms-1">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="checkAllLead">
                                                                        <label class="custom-control-label"
                                                                            for="checkAllLead"></label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Lead: activate to sort column ascending"
                                                                style="width: 100.863px;">Lead</th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Email: activate to sort column ascending"
                                                                style="width: 168.725px;">Email</th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Source: activate to sort column ascending"
                                                                style="width: 82.45px;">Source</th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Phone: activate to sort column ascending"
                                                                style="width: 92.625px;">Phone</th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Date: activate to sort column ascending"
                                                                style="width: 133.512px;">Date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="leadList"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Status: activate to sort column ascending"
                                                                style="width: 128.913px;">Status</th>
                                                            <th class="text-end sorting" tabindex="0"
                                                                aria-controls="leadList" rowspan="1" colspan="1"
                                                                aria-label="Actions: activate to sort column ascending"
                                                                style="width: 68px;">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-select2-id="select2-data-34-zoiy">




















                                                        <tr class="single-item odd"
                                                            data-select2-id="select2-data-13-ic3k">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_1">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_1"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div class="avatar-image avatar-md">
                                                                        <img src="assets/images/avatar/1.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Alexandra
                                                                            Della</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">alex.della@outlook.com</a></td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-facebook"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Facebook</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:">(375) 9632 548</a></td>
                                                            <td>2023-04-05, 00:05PM</td>
                                                            <td data-select2-id="select2-data-12-jo7t">
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-1-bfmj" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary"
                                                                        data-select2-id="select2-data-24-u7iz">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning"
                                                                        data-select2-id="select2-data-25-5vbo">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success"
                                                                        data-select2-id="select2-data-26-3xst">Qualified
                                                                    </option>
                                                                    <option value="danger" data-bg="bg-danger"
                                                                        data-select2-id="select2-data-27-klhw">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal"
                                                                        data-select2-id="select2-data-28-qmp3">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo"
                                                                        selected=""
                                                                        data-select2-id="select2-data-3-ij99">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5 select2-container--below" dir="ltr" data-select2-id="select2-data-1-zlng" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-dqe7-container" aria-controls="select2-dqe7-container"><span class="select2-selection__rendered" id="select2-dqe7-container" role="textbox" aria-readonly="true" title="Declined"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-danger"></span> Declined</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-2-pc8k" style="width: 105.838px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item even"
                                                            data-select2-id="select2-data-33-dqvg">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_2">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_2"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div
                                                                        class="avatar-image avatar-md bg-warning text-white">
                                                                        N
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Nancy
                                                                            Elliot</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">nancy.elliot@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-facebook"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Facebook</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (375) 8523 456</a></td>
                                                            <td>2023-04-06, 02:52PM</td>
                                                            <td data-select2-id="select2-data-32-7eqo">
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-4-vv5e" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary"
                                                                        data-select2-id="select2-data-39-7reo">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning"
                                                                        data-select2-id="select2-data-40-wxnw">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success"
                                                                        data-select2-id="select2-data-41-hdrj">Qualified
                                                                    </option>
                                                                    <option value="danger" data-bg="bg-danger"
                                                                        data-select2-id="select2-data-42-5a76">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal" selected=""
                                                                        data-select2-id="select2-data-6-95mm">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo"
                                                                        data-select2-id="select2-data-43-yodx">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5 select2-container--above" dir="ltr" data-select2-id="select2-data-2-ncvs" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-nihq-container" aria-controls="select2-nihq-container"><span class="select2-selection__rendered" id="select2-nihq-container" role="textbox" aria-readonly="true" title="Customer"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> Customer</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-5-jkol" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item odd">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_3">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_3"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div class="avatar-image avatar-md">
                                                                        <img src="assets/images/avatar/2.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Green
                                                                            Cute</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">green.cute@outlook.com</a></td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-twitter"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Twitter</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (845) 9632 874</a></td>
                                                            <td>2023-04-08, 08:34PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-7-42i0" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger"
                                                                        selected=""
                                                                        data-select2-id="select2-data-9-21vk">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-3-8q6n" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-zktt-container" aria-controls="select2-zktt-container"><span class="select2-selection__rendered" id="select2-zktt-container" role="textbox" aria-readonly="true" title="Declined"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-danger"></span> Declined</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-8-dkof" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item even"
                                                            data-select2-id="select2-data-48-oofg">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_4">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_4"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div
                                                                        class="avatar-image avatar-md bg-teal text-white">
                                                                        H</div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Henry
                                                                            Leach</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">henry.leach@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-instagram"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Instagram</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (258) 9514 657</a></td>
                                                            <td>2023-04-10, 05:25PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-10-st9n" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary"
                                                                        data-select2-id="select2-data-49-9z0d">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning"
                                                                        data-select2-id="select2-data-50-8a9a">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success"
                                                                        selected=""
                                                                        data-select2-id="select2-data-12-4xeo">Qualified
                                                                    </option>
                                                                    <option value="danger" data-bg="bg-danger"
                                                                        data-select2-id="select2-data-51-khma">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal"
                                                                        data-select2-id="select2-data-52-71oa">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo"
                                                                        data-select2-id="select2-data-53-xhkc">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5 select2-container--above" dir="ltr" data-select2-id="select2-data-4-hz0j" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-4srg-container" aria-controls="select2-4srg-container"><span class="select2-selection__rendered" id="select2-4srg-container" role="textbox" aria-readonly="true" title="Qualified"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-success"></span> Qualified</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-11-bhdk" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item odd">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_5">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_5"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div class="avatar-image avatar-md">
                                                                        <img src="assets/images/avatar/3.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Marianne
                                                                            Audrey</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">marine.adrey@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-linkedin"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Linkedin</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (456) 6547 524</a></td>
                                                            <td>2023-04-12, 12:02PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-13-xk7k" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning"
                                                                        selected=""
                                                                        data-select2-id="select2-data-15-rg0z">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-5-emns" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-ez1g-container" aria-controls="select2-ez1g-container"><span class="select2-selection__rendered" id="select2-ez1g-container" role="textbox" aria-readonly="true" title="Working"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-warning"></span> Working</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-14-g1zi" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item even">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_6">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_6"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div
                                                                        class="avatar-image avatar-md bg-warning text-white">
                                                                        N
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Nancy
                                                                            Elliot</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">nancy.elliot@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-instagram"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Instagram</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (375) 8523 456</a></td>
                                                            <td>2023-04-15, 02:40PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-16-w4ds" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary"
                                                                        selected=""
                                                                        data-select2-id="select2-data-18-zble">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-6-26a6" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-rvek-container" aria-controls="select2-rvek-container"><span class="select2-selection__rendered" id="select2-rvek-container" role="textbox" aria-readonly="true" title="New"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-primary"></span> New</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-17-fweu" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item odd">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_7">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_7"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div class="avatar-image avatar-md">
                                                                        <img src="assets/images/avatar/4.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Cute
                                                                            Green</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">cute.green@outlook.com</a></td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-github"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Github</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (632) 5486 662</a></td>
                                                            <td>2023-04-25, 03:42PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-19-ey7s" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo"
                                                                        selected=""
                                                                        data-select2-id="select2-data-21-tirj">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-7-o7xv" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-zzt6-container" aria-controls="select2-zzt6-container"><span class="select2-selection__rendered" id="select2-zzt6-container" role="textbox" aria-readonly="true" title="Contacted"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-indigo"></span> Contacted</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-20-z4tq" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item even">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_8">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_8"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div
                                                                        class="avatar-image avatar-md bg-success text-white">
                                                                        H
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Leach
                                                                            Henry</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">leach.henry@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-facebook"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Facebook</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (951) 5478 884</a></td>
                                                            <td>2023-04-14, 03:32PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-22-x56a" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal" selected=""
                                                                        data-select2-id="select2-data-24-8ooh">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-8-so4d" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-cjlg-container" aria-controls="select2-cjlg-container"><span class="select2-selection__rendered" id="select2-cjlg-container" role="textbox" aria-readonly="true" title="Customer"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> Customer</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-23-lt0g" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item odd">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_9">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_9"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div class="avatar-image avatar-md">
                                                                        <img src="assets/images/avatar/5.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Audrey
                                                                            Marianne</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">adrey.marine@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-linkedin"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Linkedin</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (556) 2457 586</a></td>
                                                            <td>2023-04-20, 01:47PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-25-1tpq" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success">
                                                                        Qualified</option>
                                                                    <option value="danger" data-bg="bg-danger"
                                                                        selected=""
                                                                        data-select2-id="select2-data-27-uala">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-9-vfvt" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-ej1l-container" aria-controls="select2-ej1l-container"><span class="select2-selection__rendered" id="select2-ej1l-container" role="textbox" aria-readonly="true" title="Declined"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-danger"></span> Declined</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-26-i8c2" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="single-item even">
                                                            <td class="sorting_1">
                                                                <div class="item-checkbox ms-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input checkbox"
                                                                            id="checkBox_10">
                                                                        <label class="custom-control-label"
                                                                            for="checkBox_10"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="leads-view.html" class="hstack gap-3">
                                                                    <div
                                                                        class="avatar-image avatar-md bg-primary text-white">
                                                                        E
                                                                    </div>
                                                                    <div>
                                                                        <span class="text-truncate-1-line">Elliot
                                                                            Nancy</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><a href="apps-mail.html">elliot.nancy@outlook.com</a>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2">
                                                                    <div class="avatar-text avatar-sm">
                                                                        <i class="feather-twitter"></i>
                                                                    </div>
                                                                    <a href="javascript:void(0);">Twitter</a>
                                                                </div>
                                                            </td>
                                                            <td><a href="tel:"> (554) 2478 663</a></td>
                                                            <td>2023-04-22, 02:12PM</td>
                                                            <td>
                                                                <select class="form-control select2-hidden-accessible"
                                                                    data-select2-selector="status"
                                                                    data-select2-id="select2-data-28-w3ij" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="primary" data-bg="bg-primary">New
                                                                    </option>
                                                                    <option value="warning" data-bg="bg-warning">Working
                                                                    </option>
                                                                    <option value="success" data-bg="bg-success"
                                                                        selected=""
                                                                        data-select2-id="select2-data-30-1f07">Qualified
                                                                    </option>
                                                                    <option value="danger" data-bg="bg-danger">Declined
                                                                    </option>
                                                                    <option value="teal" data-bg="bg-teal">Customer
                                                                    </option>
                                                                    <option value="indigo" data-bg="bg-indigo">Contacted
                                                                    </option>
                                                                    <!-- </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-10-0ij7" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-4kvp-container" aria-controls="select2-4kvp-container"><span class="select2-selection__rendered" id="select2-4kvp-container" role="textbox" aria-readonly="true" title="Qualified"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-success"></span> Qualified</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-29-hon4" style="width: 142.562px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="leads-view.html"
                                                                        class="avatar-text avatar-md">
                                                                        <i class="feather feather-eye"></i>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)"
                                                                            class="avatar-text avatar-md"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-offset="0,21">
                                                                            <i
                                                                                class="feather feather-more-horizontal"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-edit-3 me-3"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item printBTN"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-printer me-3"></i>
                                                                                    <span>Print</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-clock me-3"></i>
                                                                                    <span>Remind</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-archive me-3"></i>
                                                                                    <span>Archive</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-alert-octagon me-3"></i>
                                                                                    <span>Report Spam</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0)">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <!-- </div>
                                        </div> -->
                                        
                                    <!-- </div> -->
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