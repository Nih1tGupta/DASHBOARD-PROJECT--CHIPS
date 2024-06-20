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
<center><h1>EDIT</h1><center>
<div class="main-content">
<form action="{{url('admin/edit_record/'.$data->id)}}" method="POST">
    @csrf
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile No.">
  </div>
  <div class="form-group">
  <label for="exampleInputRole">Role</label>
  <select class="form-control select2-hidden-accessible" data-select2-selector="status" data-select2-id="select2-data-46-bs27" tabindex="-1" aria-hidden="true" name="role">
                                                    <option value="1" data-bg="bg-success" selected="" data-select2-id="select2-data-48-emuu" >Active</option>
                                                    <option value="2" data-bg="bg-warning" data-select2-id="select2-data-98-wtze">Inactive</option>
                                                    <option value="3" data-bg="bg-danger" data-select2-id="select2-data-99-0jib">Declined</option>
                                                </select>
                                                
  </div> -->
  <div class="main-content">
    <div class="row">
    <div class="col-lg-12">
    <div class="card border-top-0">
  <div class="card-body personal-info">
                                        
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-3">
                                                <label for="fullnameInput" class="fw-semibold">Name: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-user"></i></div>
                                                    <input type="text"  name="name"  value="{{$data->name}}"class="form-control" id="fullnameInput" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-3">
                                                <label for="mailInput" class="fw-semibold">Email: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-mail"></i></div>
                                                    <input type="text"  name="email" value="{{$data->email}}" class="form-control" id="mailInput" placeholder="Email" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-3">
                                                <label for="phoneInput" class="fw-semibold">Phone: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-phone"></i></div>
                                                    <input type="text" name="mobile" value="{{$data->mobile}}" class="form-control" id="phoneInput" placeholder="Mobile">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-3">
                                                <label for="designationInput" class="fw-semibold">Role: </label>
                                            </div>
                                            <div class="col-lg-8">

                                            <select class="form-control select2-hidden-accessible" data-select2-selector="status" data-select2-id="select2-data-46-bs27" tabindex="-1" aria-hidden="true" name="role" value="{{$data->role}}">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->role_id}}"  
            
                                                    @if($role->role_id ==$data->role)
                                                    selected="";
                                                   @endif
                                                   >{{$role->role_value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
            
                                    </div>
                                    
    <button type="submit" class="btn btn-primary  w-25 mb-4 ms-auto me-auto">Submit</button>
</div></div>
     
 
</form>
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
<script src="{{asset('assets/js/dashboard-init.min.js');}}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/daterangepicker.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/vendors.min.js');}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{asset('assets/vendors/js/select2.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/select2-active.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/datepicker.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/lslstrength.min.js');}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('assets/js/common-init.min.js');}}"></script>
    <script src="{{asset('assets/js/customers-create-init.min.js');}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
    @endsection