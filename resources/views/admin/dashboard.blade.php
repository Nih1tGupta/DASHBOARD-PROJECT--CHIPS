@extends('admin.layout')
@section('title','Dashboard')

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

@endsection
@section('content')

<div class="page-header">

    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ul>
           
    </div>
</div>
@if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
<div class="main-content">
    <div class="row">
        <!-- [Invoices Awaiting Payment] start -->
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">45</span>/<span
                                        class="counter">76</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Invoices Awaiting Payment</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Invoices Awaiting </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">$5,569</span>
                                <span class="fs-11 text-muted">(56%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Invoices Awaiting Payment] end -->
        <!-- [Converted Leads] start -->
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-cast"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">48</span>/<span
                                        class="counter">86</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Converted Leads</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Leads </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">52 Completed</span>
                                <span class="fs-11 text-muted">(63%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Converted Leads] end -->
        <!-- [Projects In Progress] start -->
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-briefcase"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">16</span>/<span
                                        class="counter">20</span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Projects In Progress</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);"
                                class="fs-12 fw-medium text-muted text-truncate-1-line">Projects In Progress </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">16 Completed</span>
                                <span class="fs-11 text-muted">(78%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Projects In Progress] end -->
        <!-- [Conversion Rate] start -->
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-activity"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">
                                Conversion Rate </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">$2,254</span>
                                <span class="fs-11 text-muted">(46%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row">
            <div class="col-xxl-8 col-md-6 ">
                <div class="card stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Latest Leads</h5>
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
                    <div class="card-body custom-card-action p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="border-b">
                                        <th scope="row">Users</th>
                                        <th>Proposal</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">Archie Cantones</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">Sent</span>
                                        </td>
                                        <td>11/06/2023 10:53</td>
                                        <td>
                                            <span class="badge bg-soft-success text-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">Holmes Cherryman</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">New</span>
                                        </td>
                                        <td>11/06/2023 10:53</td>
                                        <td>
                                            <span class="badge bg-soft-primary text-primary">In Progress </span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">Malanie Hanvey</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">Sent</span>
                                        </td>
                                        <td>11/06/2023 10:53</td>
                                        <td>
                                            <span class="badge bg-soft-success text-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">Kenneth Hune</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">Returning</span>
                                        </td>
                                        <td>11/06/2023 10:53</td>
                                        <td>
                                            <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">Valentine Maton</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">Sent</span>
                                        </td>
                                        <td>11/06/2023 10:53</td>
                                        <td>
                                            <span class="badge bg-soft-success text-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                            <li>
                                <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="active">1</a></li>
                            <li><a href="javascript:void(0);">2</a></li>
                            <li>
                                <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                            </li>
                            <li><a href="javascript:void(0);">8</a></li>
                            <li><a href="javascript:void(0);">9</a></li>
                            <li>
                                <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card stretch-full col-xxl-4 col-md-6 h-30">
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label">To <span class="text-danger">*</span></label>
                        <select class="form-select form-control select2-hidden-accessible" data-select2-selector="user"
                            data-select2-id="select2-data-20-3vtt" tabindex="-1" aria-hidden="true">
                            <option value="alex@outlook.com" data-user="1" data-select2-id="select2-data-22-ud9f">
                                alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                            data-select2-id="select2-data-21-anu9" style="width: 514.4px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-yf1y-container"
                                    aria-controls="select2-yf1y-container"><span class="select2-selection__rendered"
                                        id="select2-yf1y-container" role="textbox" aria-readonly="true"
                                        title="alex@outlook.com"><span class="hstack gap-3"> <img
                                                src="./../assets/images/avatar/1.png" class="avatar-image avatar-sm">
                                            alex@outlook.com</span></span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div>
                      
                        <div class="row">
                            
                            <div class="col-lg-6 mb-4">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-2" placeholder="Address Line 1">
                            </div>
                           
                            <div class="col-lg-6 mb-4 ">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Address Line 2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Emial">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-6 mb-4">
                            <label class="form-label">Country <span class="text-danger">*</span></label>
                            <select class="form-control select2-hidden-accessible" data-select2-selector="country"
                                data-select2-id="select2-data-23-u1dn" tabindex="-1" aria-hidden="true">
                                <option data-country="af">Afghanistan</option>
                                <option data-country="ax">Åland Islands</option>
                                <option data-country="al">Albania</option>
                                <option data-country="dz">Algeria</option>
                                <option data-country="as">American Samoa</option>
                                <option data-country="ad">Andorra</option>
                                <option data-country="ao">Angola</option>
                                <option data-country="ai">Anguilla</option>
                                <option data-country="aq">Antarctica</option>
                                <option data-country="ag">Antigua &amp; Barbuda</option>
                                <option data-country="ar">Argentina</option>
                                <option data-country="am">Armenia</option>
                                <option data-country="aw">Aruba</option>
                                <option data-country="au">Australia</option>
                                <option data-country="at">Austria</option>
                                <option data-country="az">Azerbaijan</option>
                                <option data-country="bs">Bahamas</option>
                                <option data-country="bh">Bahrain</option>
                                <option data-country="bd">Bangladesh</option>
                                <option data-country="bb">Barbados</option>
                                <option data-country="by">Belarus</option>
                                <option data-country="be">Belgium</option>
                                <option data-country="bz">Belize</option>
                                <option data-country="bj">Benin</option>
                                <option data-country="bm">Bermuda</option>
                                <option data-country="bt">Bhutan</option>
                                <option data-country="bo">Bolivia</option>
                                <option data-country="bq">Caribbean Netherlands</option>
                                <option data-country="ba">Bosnia &amp; Herzegovina</option>
                                <option data-country="bw">Botswana</option>
                                <option data-country="bv">Bouvet Island</option>
                                <option data-country="br">Brazil</option>
                                <option data-country="io">British Indian Ocean Territory</option>
                                <option data-country="bn">Brunei</option>
                                <option data-country="bg">Bulgaria</option>
                                <option data-country="bf">Burkina Faso</option>
                                <option data-country="bi">Burundi</option>
                                <option data-country="kh">Cambodia</option>
                                <option data-country="cm">Cameroon</option>
                                <option data-country="ca">Canada</option>
                                <option data-country="cv">Cape Verde</option>
                                <option data-country="ky">Cayman Islands</option>
                                <option data-country="cf">Central African Republic</option>
                                <option data-country="td">Chad</option>
                                <option data-country="cl">Chile</option>
                                <option data-country="cn">China</option>
                                <option data-country="cx">Christmas Island</option>
                                <option data-country="cc">Cocos (Keeling) Islands</option>
                                <option data-country="co">Colombia</option>
                                <option data-country="km">Comoros</option>
                                <option data-country="cg">Congo - Brazzaville</option>
                                <option data-country="cd">Congo - Kinshasa</option>
                                <option data-country="ck">Cook Islands</option>
                                <option data-country="cr">Costa Rica</option>
                                <option data-country="ci">Côte d'Ivoire</option>
                                <option data-country="hr">Croatia</option>
                                <option data-country="cu">Cuba</option>
                                <option data-country="cu">Curaçao</option>
                                <option data-country="cy">Cyprus</option>
                                <option data-country="cz">Czechia</option>
                                <option data-country="dk">Denmark</option>
                                <option data-country="dj">Djibouti</option>
                                <option data-country="dm">Dominica</option>
                                <option data-country="do">Dominican Republic</option>
                                <option data-country="ec">Ecuador</option>
                                <option data-country="eg">Egypt</option>
                                <option data-country="sv">El Salvador</option>
                                <option data-country="gq">Equatorial Guinea</option>
                                <option data-country="er">Eritrea</option>
                                <option data-country="ee">Estonia</option>
                                <option data-country="et">Ethiopia</option>
                                <option data-country="fk">Falkland Islands (Islas Malvinas)</option>
                                <option data-country="fo">Faroe Islands</option>
                                <option data-country="fj">Fiji</option>
                                <option data-country="fi">Finland</option>
                                <option data-country="fr">France</option>
                                <option data-country="gf">French Guiana</option>
                                <option data-country="pf">French Polynesia</option>
                                <option data-country="tf">French Southern Territories</option>
                                <option data-country="ga">Gabon</option>
                                <option data-country="gm">Gambia</option>
                                <option data-country="ge">Georgia</option>
                                <option data-country="de">Germany</option>
                                <option data-country="gh">Ghana</option>
                                <option data-country="gi">Gibraltar</option>
                                <option data-country="gr">Greece</option>
                                <option data-country="gl">Greenland</option>
                                <option data-country="gd">Grenada</option>
                                <option data-country="gp">Guadeloupe</option>
                                <option data-country="gu">Guam</option>
                                <option data-country="gt">Guatemala</option>
                                <option data-country="gg">Guernsey</option>
                                <option data-country="gn">Guinea</option>
                                <option data-country="gw">Guinea-Bissau</option>
                                <option data-country="gy">Guyana</option>
                                <option data-country="ht">Haiti</option>
                                <option data-country="hm">Heard &amp; McDonald Islands</option>
                                <option data-country="va">Vatican City</option>
                                <option data-country="hn">Honduras</option>
                                <option data-country="hk">Hong Kong</option>
                                <option data-country="hu">Hungary</option>
                                <option data-country="is">Iceland</option>
                                <option data-country="in">India</option>
                                <option data-country="id">Indonesia</option>
                                <option data-country="ir">Iran</option>
                                <option data-country="iq">Iraq</option>
                                <option data-country="ie">Ireland</option>
                                <option data-country="im">Isle of Man</option>
                                <option data-country="il">Israel</option>
                                <option data-country="it">Italy</option>
                                <option data-country="jm">Jamaica</option>
                                <option data-country="jp">Japan</option>
                                <option data-country="je">Jersey</option>
                                <option data-country="jo">Jordan</option>
                                <option data-country="kz">Kazakhstan</option>
                                <option data-country="ke">Kenya</option>
                                <option data-country="ki">Kiribati</option>
                                <option data-country="kp">North Korea</option>
                                <option data-country="kr">South Korea</option>
                                <option data-country="xk">Kosovo</option>
                                <option data-country="kw">Kuwait</option>
                                <option data-country="kg">Kyrgyzstan</option>
                                <option data-country="la">Laos</option>
                                <option data-country="lv">Latvia</option>
                                <option data-country="lb">Lebanon</option>
                                <option data-country="ls">Lesotho</option>
                                <option data-country="lr">Liberia</option>
                                <option data-country="ly">Libya</option>
                                <option data-country="li">Liechtenstein</option>
                                <option data-country="lt">Lithuania</option>
                                <option data-country="lu">Luxembourg</option>
                                <option data-country="mo">Macao</option>
                                <option data-country="mk">North Macedonia</option>
                                <option data-country="mg">Madagascar</option>
                                <option data-country="mw">Malawi</option>
                                <option data-country="my">Malaysia</option>
                                <option data-country="mv">Maldives</option>
                                <option data-country="ml">Mali</option>
                                <option data-country="mt">Malta</option>
                                <option data-country="mh">Marshall Islands</option>
                                <option data-country="mq">Martinique</option>
                                <option data-country="mr">Mauritania</option>
                                <option data-country="mu">Mauritius</option>
                                <option data-country="yt">Mayotte</option>
                                <option data-country="mx">Mexico</option>
                                <option data-country="fm">Micronesia</option>
                                <option data-country="md">Moldova</option>
                                <option data-country="mc">Monaco</option>
                                <option data-country="mn">Mongolia</option>
                                <option data-country="me">Montenegro</option>
                                <option data-country="ms">Montserrat</option>
                                <option data-country="ma">Morocco</option>
                                <option data-country="mz">Mozambique</option>
                                <option data-country="mm">Myanmar (Burma)</option>
                                <option data-country="na">Namibia</option>
                                <option data-country="nr">Nauru</option>
                                <option data-country="np">Nepal</option>
                                <option data-country="nl">Netherlands</option>
                                <option data-country="cu">Curaçao</option>
                                <option data-country="nc">New Caledonia</option>
                                <option data-country="nz">New Zealand</option>
                                <option data-country="ni">Nicaragua</option>
                                <option data-country="ne">Niger</option>
                                <option data-country="ng">Nigeria</option>
                                <option data-country="nu">Niue</option>
                                <option data-country="nf">Norfolk Island</option>
                                <option data-country="mp">Northern Mariana Islands</option>
                                <option data-country="no">Norway</option>
                                <option data-country="om">Oman</option>
                                <option data-country="pk">Pakistan</option>
                                <option data-country="pw">Palau</option>
                                <option data-country="ps">Palestine</option>
                                <option data-country="pa">Panama</option>
                                <option data-country="pg">Papua New Guinea</option>
                                <option data-country="py">Paraguay</option>
                                <option data-country="pe">Peru</option>
                                <option data-country="ph">Philippines</option>
                                <option data-country="pn">Pitcairn Islands</option>
                                <option data-country="pl">Poland</option>
                                <option data-country="pt">Portugal</option>
                                <option data-country="pr">Puerto Rico</option>
                                <option data-country="qa">Qatar</option>
                                <option data-country="re">Réunion</option>
                                <option data-country="ro">Romania</option>
                                <option data-country="ru">Russia</option>
                                <option data-country="rw">Rwanda</option>
                                <option data-country="bl">St. Barthélemy</option>
                                <option data-country="sh">St. Helena</option>
                                <option data-country="kn">St. Kitts &amp; Nevis</option>
                                <option data-country="lc">St. Lucia</option>
                                <option data-country="mf">St. Martin</option>
                                <option data-country="pm">St. Pierre &amp; Miquelon</option>
                                <option data-country="vc">St. Vincent &amp; Grenadines</option>
                                <option data-country="ws">Samoa</option>
                                <option data-country="sm">San Marino</option>
                                <option data-country="st">São Tomé &amp; Príncipe</option>
                                <option data-country="sa">Saudi Arabia</option>
                                <option data-country="sn">Senegal</option>
                                <option data-country="rs">Serbia</option>
                                <option data-country="sr">Serbia</option>
                                <option data-country="sc">Seychelles</option>
                                <option data-country="sl">Sierra Leone</option>
                                <option data-country="sg">Singapore</option>
                                <option data-country="sx">Sint Maarten</option>
                                <option data-country="sk">Slovakia</option>
                                <option data-country="si">Slovenia</option>
                                <option data-country="sb">Solomon Islands</option>
                                <option data-country="so">Somalia</option>
                                <option data-country="za">South Africa</option>
                                <option data-country="gs">South Georgia &amp; South Sandwich Islands</option>
                                <option data-country="ss">South Sudan</option>
                                <option data-country="es">Spain</option>
                                <option data-country="lk">Sri Lanka</option>
                                <option data-country="sd">Sudan</option>
                                <option data-country="sr">Suriname</option>
                                <option data-country="sj">Svalbard &amp; Jan Mayen</option>
                                <option data-country="sz">Eswatini</option>
                                <option data-country="se">Sweden</option>
                                <option data-country="ch">Switzerland</option>
                                <option data-country="sy">Syria</option>
                                <option data-country="tw">Taiwan</option>
                                <option data-country="tj">Tajikistan</option>
                                <option data-country="tz">Tanzania</option>
                                <option data-country="th">Thailand</option>
                                <option data-country="tl">Timor-Leste</option>
                                <option data-country="tg">Togo</option>
                                <option data-country="tk">Tokelau</option>
                                <option data-country="to">Tonga</option>
                                <option data-country="tt">Trinidad &amp; Tobago</option>
                                <option data-country="tn">Tunisia</option>
                                <option data-country="tr">Turkey</option>
                                <option data-country="tm">Turkmenistan</option>
                                <option data-country="tc">Turks &amp; Caicos Islands</option>
                                <option data-country="tv">Tuvalu</option>
                                <option data-country="ug">Uganda</option>
                                <option data-country="ua">Ukraine</option>
                                <option data-country="ae">United Arab Emirates</option>
                                <option data-country="gb">United Kingdom</option>
                                <option data-country="us" selected="" data-select2-id="select2-data-25-rvu4">United
                                    States</option>
                                <option data-country="um">U.S. Outlying Islands</option>
                                <option data-country="uy">Uruguay</option>
                                <option data-country="uz">Uzbekistan</option>
                                <option data-country="vu">Vanuatu</option>
                                <option data-country="ve">Venezuela</option>
                                <option data-country="vn">Vietnam</option>
                                <option data-country="vg">British Virgin Islands</option>
                                <option data-country="vi">U.S. Virgin Islands</option>
                                <option data-country="wf">Wallis &amp; Futuna</option>
                                <option data-country="eh">Western Sahara</option>
                                <option data-country="ye">Yemen</option>
                                <option data-country="zm">Zambia</option>
                                <option data-country="zw">Zimbabwe</option>
                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                                data-select2-id="select2-data-24-06vc" style="width: 245.2px;"><span
                                    class="selection"><span class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-sqzz-container"
                                        aria-controls="select2-sqzz-container"><span class="select2-selection__rendered"
                                            id="select2-sqzz-container" role="textbox" aria-readonly="true"
                                            title="United States"><span class="hstack gap-3"> <img
                                                    src="./../assets/vendors/img/flags/1x1/us.svg"
                                                    class="avatar-image avatar-sm"> United States</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div> -->
                        <!-- <div class="col-lg-6 mb-4">
                            <label class="form-label">State</label>
                            <select class="form-control select2-hidden-accessible" data-select2-selector="state"
                                data-select2-id="select2-data-29-8xe4" tabindex="-1" aria-hidden="true">
                                <option data-state="al">Alabama</option>
                                <option data-state="ak" selected="" data-select2-id="select2-data-31-zuxo">Alaska
                                </option>
                                <option data-state="as">American Samoa</option>
                                <option data-state="az">Arizona</option>
                                <option data-state="ar">Arkansas</option>
                                <option data-state="um">Baker Island</option>
                                <option data-state="ca">California</option>
                                <option data-state="co">Colorado</option>
                                <option data-state="ct">Connecticut</option>
                                <option data-state="de">Delaware</option>
                                <option data-state="dc">District of Columbia</option>
                                <option data-state="fl">Florida</option>
                                <option data-state="ga">Georgia</option>
                                <option data-state="gu">Guam</option>
                                <option data-state="hi">Hawaii</option>
                                <option data-state="um">Howland Island</option>
                                <option data-state="id">Idaho</option>
                                <option data-state="il">Illinois</option>
                                <option data-state="in">Indiana</option>
                                <option data-state="ia">Iowa</option>
                                <option data-state="um">Jarvis Island</option>
                                <option data-state="um">Johnston Atoll</option>
                                <option data-state="ks">Kansas</option>
                                <option data-state="ky">Kentucky</option>
                                <option data-state="um">Kingman Reef</option>
                                <option data-state="la">Louisiana</option>
                                <option data-state="me">Maine</option>
                                <option data-state="md">Maryland</option>
                                <option data-state="ma">Massachusetts</option>
                                <option data-state="mi">Michigan</option>
                                <option data-state="um">Midway Atoll</option>
                                <option data-state="mn">Minnesota</option>
                                <option data-state="ms">Mississippi</option>
                                <option data-state="mo">Missouri</option>
                                <option data-state="mt">Montana</option>
                                <option data-state="um">Navassa Island</option>
                                <option data-state="ne">Nebraska</option>
                                <option data-state="nv">Nevada</option>
                                <option data-state="nh">New Hampshire</option>
                                <option data-state="nj">New Jersey</option>
                                <option data-state="nm">New Mexico</option>
                                <option data-state="ny">New York</option>
                                <option data-state="nc">North Carolina</option>
                                <option data-state="nd">North Dakota</option>
                                <option data-state="mp">Northern Mariana Islands</option>
                                <option data-state="oh">Ohio</option>
                                <option data-state="ok">Oklahoma</option>
                                <option data-state="or">Oregon</option>
                                <option data-state="um">Palmyra Atoll</option>
                                <option data-state="pa">Pennsylvania</option>
                                <option data-state="pr">Puerto Rico</option>
                                <option data-state="ri">Rhode Island</option>
                                <option data-state="sc">South Carolina</option>
                                <option data-state="sd">South Dakota</option>
                                <option data-state="tn">Tennessee</option>
                                <option data-state="tx">Texas</option>
                                <option data-state="um">United States Minor Outlying Islands</option>
                                <option data-state="vi">United States Virgin Islands</option>
                                <option data-state="ut">Utah</option>
                                <option data-state="vt">Vermont</option>
                                <option data-state="va">Virginia</option>
                                <option data-state="um">Wake Island</option>
                                <option data-state="wa">Washington</option>
                                <option data-state="wv">West Virginia</option>
                                <option data-state="wi">Wisconsin</option>
                                <option data-state="wy">Wyoming</option>
                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                                data-select2-id="select2-data-30-7jis" style="width: 245.2px;"><span
                                    class="selection"><span class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-8qz2-container"
                                        aria-controls="select2-8qz2-container"><span class="select2-selection__rendered"
                                            id="select2-8qz2-container" role="textbox" aria-readonly="true"
                                            title="Alaska"><span class="hstack gap-3"> <img
                                                    src="./../assets/vendors/img/flags/us/ak.png"
                                                    class="avatar-image avatar-sm"> Alaska</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div> -->
                    </div>
                    <div class="row">
                    <a class="btn btn-primary" href="#" role="button">Submit</a>
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
<script src="{{asset('assets/js/dashboard-init.min.js');}}"></script>
<!--! END: Apps Init !-->
<!--! BEGIN: Theme Customizer  !-->
<script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/daterangepicker.min.js');}}"></script>
@endsection