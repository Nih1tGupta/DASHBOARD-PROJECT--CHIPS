@extends('admin.layout')
@section('title', 'View PR')
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
<form action="{{ route('view_gallery') }}" method="POST">
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">View Pending Requests</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Gallery</a></li>
            <li class="breadcrumb-item">View Pending Requests</li>
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
                                                    <th class="sorting" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Lead: activate to sort column ascending"
                                                        >Gallery Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Lead: activate to sort column ascending"
                                                        >User</th>
                                                    <th class="sorting" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        >Created Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        >Updated Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending"
                                                        >Status</th>
                                                        @if(auth()->user()->role == 1)
                                                    <th class="" tabindex="0" aria-controls="leadList"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending"
                                                        >Preview</th>
                                                        @endif
                                                </tr>
                                            </thead>
                                            <tbody data-select2-id="select2-data-5-71uf">
                                                @if($galleries)
                                                @foreach($galleries as $gallery)
                                                <tr class="single-item odd" data-select2-id="select2-data-4-8ka4">
                                                    <td>
                                                        <a href="#" class="hstack gap-3">
                                                            <!-- <div class="avatar-image avatar-md bg-primary text-white">
                                                                    E
                                                                </div> -->
                                                            <div>
                                                                <span
                                                                    class="text-truncate-1-line">{{ $gallery->gallery_name }}</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/admin/edit/'.$gallery->user_id) }}" class="hstack gap-3">
                                                            <div>
                                                                <span class="text-truncate-1-line">
                                                                    @foreach($members as $member)
                                                                    @if($member->id == $gallery->user_id)
                                                                        {{ $member->name }}
                                                                    @endif
                                                                    @endforeach
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    </td>
                                                    <td>{{ $gallery->created_at }}</td>
                                                    <td>{{ $gallery->updated_at }}</td>
                                                    @if($gallery->status == 0)
                                                    <td><span class="badge bg-soft-warning text-warning">Pending</span></td>
                                                    @endif
                                                    @if($gallery->status == 1)
                                                    <td><span class="badge bg-soft-success text-success">Accepted</span></td>
                                                    @endif
                                                    @if($gallery->status == 2)
                                                    <td><span class="badge bg-soft-danger text-danger">Rejected</span></td>
                                                    @endif
                                                    <td>
                                                        <a href="{{ url('/admin/view_pending/'.$gallery->gallery_id) }}" class="btn btn-primary">
                                                            <!-- <i class="feather-edit me-2"></i> -->
                                                            <span>View</span>
                                                        </a>
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