<!-- 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach($details as $detail)
    <tr>
      <th>{{$detail->id}}</th>
      <td>{{$detail->name}}</td>
      <td>{{$detail->email}}</td>
      <td>{{$detail->mobile}}</td>
      <td>{{$detail->role}}</td>
    </tr>
   
   @endforeach
  </tbody>
</table> -->
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
<center>
    <h1>MEMBERS</h1>
</center>
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
                                        aria-describedby="leadList_info" data-select2-id="select2-data-leadList">
                                        <thead>

                                            <tr>

                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Lead: activate to sort column ascending"
                                                  >Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Email: activate to sort column ascending"
                                                    >Email</th>

                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Phone: activate to sort column ascending"
                                                    >Phone</th>

                                                <th class="sorting" tabindex="0" aria-controls="leadList" rowspan="1"
                                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                                    >Role</th>
                                                    <th>
                                                  Edit</th>

                                            </tr>
                                        </thead>

                                        <tbody data-select2-id="select2-data-34-zoiy">
                                            @foreach($details as $detail)
                                            <tr class="single-item odd" data-select2-id="select2-data-13-ic3k">

                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">

                                                        <div>
                                                            <span class="text-truncate-1-line">{{$detail->name}}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>{{$detail->email}}</td>
                                                <td>{{$detail->mobile}}</a></td>
                                                <td>
                                                  <a href="role:">
                                                    @foreach($roles as $role)
                                                    @if($role->role_id ==$detail->role)
                                                    {{$role->role_value}}
                                                    @endif
                                                    @endforeach
                                                  </a>
                                                </td>
                                                
                                                <td><a href="/admin/edit_record/{{$detail->id}}"class ="btn btn-primary">Edit</a></td>
                                            </tr>
                                            @endforeach
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