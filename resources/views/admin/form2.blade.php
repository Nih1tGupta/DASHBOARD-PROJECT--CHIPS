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

            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Invoice</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                                <i class="feather-layers me-2"></i>
                                <span>Save as Draft</span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save Invoice</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content" data-select2-id="select2-data-7-27ri">
                <div class="row" data-select2-id="select2-data-6-zh12">
                    <div class="col-xl-8">
                        <div class="card invoice-container">
                            <div class="card-header">
                                <h5>Invoice Create</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,25">Invoice Templates</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item active">Default</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Simple</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Classic</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Modern</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Untimate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Essential</a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Create Template</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Delete Template</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="px-4 pt-4">
                                    <div class="d-md-flex align-items-center justify-content-between">
                                        <div class="mb-4 mb-md-0 your-brand">
                                            <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                                <img src="assets/images/logo-abbr.png" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                                <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                                    <i class="feather feather-camera" aria-hidden="true"></i>
                                                </div>
                                                <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                            <div class="fs-12 text-muted mt-2">* Upload your brand</div>
                                        </div>
                                        <div class="d-md-flex align-items-center justify-content-end gap-4">
                                            <div class="form-group mb-3 mb-md-0">
                                                <label class="form-label">Issue Date:</label>
                                                <input id="issueDate" class="form-control datepicker-input" placeholder="Issue date..."><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 590px; top: 389.125px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">June 2024</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1716661800000">26</span><span class="datepicker-cell day prev" data-date="1716748200000">27</span><span class="datepicker-cell day prev" data-date="1716834600000">28</span><span class="datepicker-cell day prev" data-date="1716921000000">29</span><span class="datepicker-cell day prev" data-date="1717007400000">30</span><span class="datepicker-cell day prev" data-date="1717093800000">31</span><span class="datepicker-cell day" data-date="1717180200000">1</span><span class="datepicker-cell day" data-date="1717266600000">2</span><span class="datepicker-cell day" data-date="1717353000000">3</span><span class="datepicker-cell day" data-date="1717439400000">4</span><span class="datepicker-cell day" data-date="1717525800000">5</span><span class="datepicker-cell day" data-date="1717612200000">6</span><span class="datepicker-cell day focused" data-date="1717698600000">7</span><span class="datepicker-cell day" data-date="1717785000000">8</span><span class="datepicker-cell day" data-date="1717871400000">9</span><span class="datepicker-cell day" data-date="1717957800000">10</span><span class="datepicker-cell day" data-date="1718044200000">11</span><span class="datepicker-cell day" data-date="1718130600000">12</span><span class="datepicker-cell day" data-date="1718217000000">13</span><span class="datepicker-cell day" data-date="1718303400000">14</span><span class="datepicker-cell day" data-date="1718389800000">15</span><span class="datepicker-cell day" data-date="1718476200000">16</span><span class="datepicker-cell day" data-date="1718562600000">17</span><span class="datepicker-cell day" data-date="1718649000000">18</span><span class="datepicker-cell day" data-date="1718735400000">19</span><span class="datepicker-cell day" data-date="1718821800000">20</span><span class="datepicker-cell day" data-date="1718908200000">21</span><span class="datepicker-cell day" data-date="1718994600000">22</span><span class="datepicker-cell day" data-date="1719081000000">23</span><span class="datepicker-cell day" data-date="1719167400000">24</span><span class="datepicker-cell day" data-date="1719253800000">25</span><span class="datepicker-cell day" data-date="1719340200000">26</span><span class="datepicker-cell day" data-date="1719426600000">27</span><span class="datepicker-cell day" data-date="1719513000000">28</span><span class="datepicker-cell day" data-date="1719599400000">29</span><span class="datepicker-cell day" data-date="1719685800000">30</span><span class="datepicker-cell day next" data-date="1719772200000">1</span><span class="datepicker-cell day next" data-date="1719858600000">2</span><span class="datepicker-cell day next" data-date="1719945000000">3</span><span class="datepicker-cell day next" data-date="1720031400000">4</span><span class="datepicker-cell day next" data-date="1720117800000">5</span><span class="datepicker-cell day next" data-date="1720204200000">6</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn">Clear</button></div></div></div></div><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 457.2px; top: 282.725px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">June 2024</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1716661800000">26</span><span class="datepicker-cell day prev" data-date="1716748200000">27</span><span class="datepicker-cell day prev" data-date="1716834600000">28</span><span class="datepicker-cell day prev" data-date="1716921000000">29</span><span class="datepicker-cell day prev" data-date="1717007400000">30</span><span class="datepicker-cell day prev" data-date="1717093800000">31</span><span class="datepicker-cell day" data-date="1717180200000">1</span><span class="datepicker-cell day" data-date="1717266600000">2</span><span class="datepicker-cell day focused" data-date="1717353000000">3</span><span class="datepicker-cell day" data-date="1717439400000">4</span><span class="datepicker-cell day" data-date="1717525800000">5</span><span class="datepicker-cell day" data-date="1717612200000">6</span><span class="datepicker-cell day" data-date="1717698600000">7</span><span class="datepicker-cell day" data-date="1717785000000">8</span><span class="datepicker-cell day" data-date="1717871400000">9</span><span class="datepicker-cell day" data-date="1717957800000">10</span><span class="datepicker-cell day" data-date="1718044200000">11</span><span class="datepicker-cell day" data-date="1718130600000">12</span><span class="datepicker-cell day" data-date="1718217000000">13</span><span class="datepicker-cell day" data-date="1718303400000">14</span><span class="datepicker-cell day" data-date="1718389800000">15</span><span class="datepicker-cell day" data-date="1718476200000">16</span><span class="datepicker-cell day" data-date="1718562600000">17</span><span class="datepicker-cell day" data-date="1718649000000">18</span><span class="datepicker-cell day" data-date="1718735400000">19</span><span class="datepicker-cell day" data-date="1718821800000">20</span><span class="datepicker-cell day" data-date="1718908200000">21</span><span class="datepicker-cell day" data-date="1718994600000">22</span><span class="datepicker-cell day" data-date="1719081000000">23</span><span class="datepicker-cell day" data-date="1719167400000">24</span><span class="datepicker-cell day" data-date="1719253800000">25</span><span class="datepicker-cell day" data-date="1719340200000">26</span><span class="datepicker-cell day" data-date="1719426600000">27</span><span class="datepicker-cell day" data-date="1719513000000">28</span><span class="datepicker-cell day" data-date="1719599400000">29</span><span class="datepicker-cell day" data-date="1719685800000">30</span><span class="datepicker-cell day next" data-date="1719772200000">1</span><span class="datepicker-cell day next" data-date="1719858600000">2</span><span class="datepicker-cell day next" data-date="1719945000000">3</span><span class="datepicker-cell day next" data-date="1720031400000">4</span><span class="datepicker-cell day next" data-date="1720117800000">5</span><span class="datepicker-cell day next" data-date="1720204200000">6</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn">Clear</button></div></div></div></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Due Date:</label>
                                                <input id="dueDate" class="form-control datepicker-input" placeholder="Due date..."><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 826.4px; top: 389.125px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">June 2024</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1716661800000">26</span><span class="datepicker-cell day prev" data-date="1716748200000">27</span><span class="datepicker-cell day prev" data-date="1716834600000">28</span><span class="datepicker-cell day prev" data-date="1716921000000">29</span><span class="datepicker-cell day prev" data-date="1717007400000">30</span><span class="datepicker-cell day prev" data-date="1717093800000">31</span><span class="datepicker-cell day" data-date="1717180200000">1</span><span class="datepicker-cell day" data-date="1717266600000">2</span><span class="datepicker-cell day" data-date="1717353000000">3</span><span class="datepicker-cell day" data-date="1717439400000">4</span><span class="datepicker-cell day" data-date="1717525800000">5</span><span class="datepicker-cell day" data-date="1717612200000">6</span><span class="datepicker-cell day focused" data-date="1717698600000">7</span><span class="datepicker-cell day" data-date="1717785000000">8</span><span class="datepicker-cell day" data-date="1717871400000">9</span><span class="datepicker-cell day" data-date="1717957800000">10</span><span class="datepicker-cell day" data-date="1718044200000">11</span><span class="datepicker-cell day" data-date="1718130600000">12</span><span class="datepicker-cell day" data-date="1718217000000">13</span><span class="datepicker-cell day" data-date="1718303400000">14</span><span class="datepicker-cell day" data-date="1718389800000">15</span><span class="datepicker-cell day" data-date="1718476200000">16</span><span class="datepicker-cell day" data-date="1718562600000">17</span><span class="datepicker-cell day" data-date="1718649000000">18</span><span class="datepicker-cell day" data-date="1718735400000">19</span><span class="datepicker-cell day" data-date="1718821800000">20</span><span class="datepicker-cell day" data-date="1718908200000">21</span><span class="datepicker-cell day" data-date="1718994600000">22</span><span class="datepicker-cell day" data-date="1719081000000">23</span><span class="datepicker-cell day" data-date="1719167400000">24</span><span class="datepicker-cell day" data-date="1719253800000">25</span><span class="datepicker-cell day" data-date="1719340200000">26</span><span class="datepicker-cell day" data-date="1719426600000">27</span><span class="datepicker-cell day" data-date="1719513000000">28</span><span class="datepicker-cell day" data-date="1719599400000">29</span><span class="datepicker-cell day" data-date="1719685800000">30</span><span class="datepicker-cell day next" data-date="1719772200000">1</span><span class="datepicker-cell day next" data-date="1719858600000">2</span><span class="datepicker-cell day next" data-date="1719945000000">3</span><span class="datepicker-cell day next" data-date="1720031400000">4</span><span class="datepicker-cell day next" data-date="1720117800000">5</span><span class="datepicker-cell day next" data-date="1720204200000">6</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn">Clear</button></div></div></div></div><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 693.6px; top: 282.725px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">June 2024</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1716661800000">26</span><span class="datepicker-cell day prev" data-date="1716748200000">27</span><span class="datepicker-cell day prev" data-date="1716834600000">28</span><span class="datepicker-cell day prev" data-date="1716921000000">29</span><span class="datepicker-cell day prev" data-date="1717007400000">30</span><span class="datepicker-cell day prev" data-date="1717093800000">31</span><span class="datepicker-cell day" data-date="1717180200000">1</span><span class="datepicker-cell day" data-date="1717266600000">2</span><span class="datepicker-cell day focused" data-date="1717353000000">3</span><span class="datepicker-cell day" data-date="1717439400000">4</span><span class="datepicker-cell day" data-date="1717525800000">5</span><span class="datepicker-cell day" data-date="1717612200000">6</span><span class="datepicker-cell day" data-date="1717698600000">7</span><span class="datepicker-cell day" data-date="1717785000000">8</span><span class="datepicker-cell day" data-date="1717871400000">9</span><span class="datepicker-cell day" data-date="1717957800000">10</span><span class="datepicker-cell day" data-date="1718044200000">11</span><span class="datepicker-cell day" data-date="1718130600000">12</span><span class="datepicker-cell day" data-date="1718217000000">13</span><span class="datepicker-cell day" data-date="1718303400000">14</span><span class="datepicker-cell day" data-date="1718389800000">15</span><span class="datepicker-cell day" data-date="1718476200000">16</span><span class="datepicker-cell day" data-date="1718562600000">17</span><span class="datepicker-cell day" data-date="1718649000000">18</span><span class="datepicker-cell day" data-date="1718735400000">19</span><span class="datepicker-cell day" data-date="1718821800000">20</span><span class="datepicker-cell day" data-date="1718908200000">21</span><span class="datepicker-cell day" data-date="1718994600000">22</span><span class="datepicker-cell day" data-date="1719081000000">23</span><span class="datepicker-cell day" data-date="1719167400000">24</span><span class="datepicker-cell day" data-date="1719253800000">25</span><span class="datepicker-cell day" data-date="1719340200000">26</span><span class="datepicker-cell day" data-date="1719426600000">27</span><span class="datepicker-cell day" data-date="1719513000000">28</span><span class="datepicker-cell day" data-date="1719599400000">29</span><span class="datepicker-cell day" data-date="1719685800000">30</span><span class="datepicker-cell day next" data-date="1719772200000">1</span><span class="datepicker-cell day next" data-date="1719858600000">2</span><span class="datepicker-cell day next" data-date="1719945000000">3</span><span class="datepicker-cell day next" data-date="1720031400000">4</span><span class="datepicker-cell day next" data-date="1720117800000">5</span><span class="datepicker-cell day next" data-date="1720204200000">6</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn">Clear</button></div></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 row justify-content-between">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceLabel" class="form-label">Invoice Label</label>
                                            <input type="text" class="form-control" id="InvoiceLabel" placeholder="Duralux Invoice">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceNumber" class="form-label">Invoice Number</label>
                                            <input type="text" class="form-control" id="InvoiceNumber" placeholder="#NXL2023">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceProduct" class="form-label">Invoice Product</label>
                                            <input type="text" class="form-control" id="InvoiceProduct" placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="row px-4 justify-content-between">
                                    <div class="col-xl-5 mb-4 mb-sm-0">
                                        <div class="mb-4">
                                            <h6 class="fw-bold">Invoice From:</h6>
                                            <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoiceName" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoiceName" placeholder="Business Name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoiceEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoiceEmail" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoicePhone" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoicePhone" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="InvoiceAddress" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" class="form-control" id="InvoiceAddress" placeholder="Enter Address" style="height: 123px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="mb-4">
                                            <h6 class="fw-bold">Invoice To:</h6>
                                            <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientName" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientName" placeholder="Business Name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientEmail" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientPhone" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientPhone" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ClientAddress" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" class="form-control" id="ClientAddress" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 clearfix">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold">Add Items:</h6>
                                            <span class="fs-12 text-muted">Add items to invoice</span>
                                        </div>
                                        <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Informations">
                                            <i class="feather feather-info"></i>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered overflow-hidden" id="tab_logic">
                                            <thead>
                                                <tr class="single-item">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center wd-450">Product</th>
                                                    <th class="text-center wd-150">Qty</th>
                                                    <th class="text-center wd-150">Price</th>
                                                    <th class="text-center wd-150">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="addr0">
                                                    <td>1</td>
                                                    <td><input type="text" name="product[]" placeholder="Enter Product Name" class="form-control"></td>
                                                    <td><input type="number" name="qty[]" placeholder="Enter Qty" class="form-control qty" step="1" min="1"></td>
                                                    <td><input type="number" name="price[]" placeholder="Enter Unit Price" class="form-control price" step="1.00" min="1"></td>
                                                    <td><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly=""></td>
                                                </tr>
                                                <tr id="addr1">
                                                    <td>2</td>
                                                    <td><input type="text" name="product[]" placeholder="Enter Product Name" class="form-control"></td>
                                                    <td><input type="number" name="qty[]" placeholder="Enter Qty" class="form-control qty" step="1" min="1"></td>
                                                    <td><input type="number" name="price[]" placeholder="Enter Unit Price" class="form-control price" step="1.00" min="1"></td>
                                                    <td><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly=""></td>
                                                </tr>
                                            <tr id="addr2"></tr></tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-3">
                                        <button id="delete_row" class="btn btn-sm bg-soft-danger text-danger">Delete</button>
                                        <button id="add_row" class="btn btn-sm btn-primary">Add Items</button>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 pb-4">
                                    <div class="form-group">
                                        <label for="InvoiceNote" class="form-label">Invoice Note:</label>
                                        <textarea rows="6" class="form-control" id="InvoiceNote" placeholder="It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!" style="height: 234px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4" data-select2-id="select2-data-5-ta7i">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Grand Total:</h6>
                                        <span class="fs-12 text-muted">Grand total invoice</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Grand total invoice">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tab_logic_total">
                                        <tbody>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Sub Total</th>
                                                <td class="w-25"><input type="number" name="sub_total" placeholder="0.00" class="form-control border-0 bg-transparent p-0" id="sub_total" readonly=""></td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Tax</th>
                                                <td class="w-25">
                                                    <div class="input-group mb-2 mb-sm-0">
                                                        <input type="number" class="form-control border-0 bg-transparent p-0" id="tax" placeholder="0">
                                                        <div class="input-group-addon">%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Tax Amount</th>
                                                <td class="w-25"><input type="number" name="tax_amount" id="tax_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0" readonly=""></td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold bg-gray-100">Grand Total</th>
                                                <td class="bg-gray-100 w-25"><input type="number" name="total_amount" id="total_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0 fw-bolder text-dark" readonly=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Payment Methord:</h6>
                                        <span class="fs-12 text-muted">Select payment methord</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Select payment methord">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-justified gap-1">
                                    <li class="nav-item border border-gray-500">
                                        <a href="javascript:void(0);" class="nav-link px-2 active" data-bs-toggle="tab" data-bs-target="#pamymetDebitCardTab">
                                            <i class="bi bi-credit-card-fill"></i>
                                            <span class="ms-2">Debit Card</span>
                                        </a>
                                    </li>
                                    <li class="nav-item border border-gray-500">
                                        <a href="javascript:void(0);" class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#pamymetPaypalTab">
                                            <i class="bi bi-paypal"></i>
                                            <span class="ms-2">Paypal</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content mt-4">
                                    <div class="tab-pane fade show active" id="pamymetDebitCardTab" role="tabpanel">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control input-credit-card" placeholder="Card Number">
                                            <div class="hstack justify-content-end gap-1 mt-1 input-credit-card-type">
                                                <div class="amex">
                                                    <i class="fs-12 fa-brands fa-cc-amex"></i>
                                                </div>
                                                <div class="mastercard">
                                                    <i class="fs-12 fa-brands fa-cc-mastercard"></i>
                                                </div>
                                                <div class="visa">
                                                    <i class="fs-12 fa-brands fa-cc-visa"></i>
                                                </div>
                                                <div class="discover">
                                                    <i class="fs-12 fa-brands fa-cc-discover"></i>
                                                </div>
                                                <div class="jcb">
                                                    <i class="fs-12 fa-brands fa-cc-jcb"></i>
                                                </div>
                                                <div class="diners">
                                                    <i class="fs-12 fa-brands fa-cc-diners-club"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" placeholder="Card Holder Name">
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-date-formatting" placeholder="MM/YYYY">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-Blocks-formatting" placeholder="686">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pamymetPaypalTab" role="tabpanel">
                                        <p>Paypal is easiest way to pay online</p>
                                        <p>
                                            <a href="https://paypal.com/" target="_blank" class="btn btn-primary"><i class="bi bi-paypal me-2"></i> Log in my Paypal</a>
                                        </p>
                                        <div class="fs-11 text-muted">Note: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-select2-id="select2-data-4-c4dz">
                            <div class="card-body" data-select2-id="select2-data-3-icl9">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Currency &amp; Discount:</h6>
                                        <span class="fs-12 text-muted">Calculate your currency, tax &amp; discount</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Calculate your currency, tax &amp; discount">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <div class="form-group mb-4" data-select2-id="select2-data-174-y9xz">
                                    <select class="form-control select2-hidden-accessible" data-select2-selector="currency" data-select2-id="select2-data-1-678j" tabindex="-1" aria-hidden="true">
                                        <option data-currency="af" data-select2-id="select2-data-11-drst">AFN - Afghan Afghani - ؋</option>
                                        <option data-currency="al" data-select2-id="select2-data-12-w0km">ALL - Albanian Lek - Lek</option>
                                        <option data-currency="dz" data-select2-id="select2-data-13-eqpd">DZD - Algerian Dinar - دج</option>
                                        <option data-currency="ao" data-select2-id="select2-data-14-p4ir">AOA - Angolan Kwanza - Kz</option>
                                        <option data-currency="ar" data-select2-id="select2-data-15-8zyz">ARS - Argentine Peso - $</option>
                                        <option data-currency="am" data-select2-id="select2-data-16-wtc8">AMD - Armenian Dram - ֏</option>
                                        <option data-currency="aw" data-select2-id="select2-data-17-mxnz">AWG - Aruban Florin - ƒ</option>
                                        <option data-currency="au" data-select2-id="select2-data-18-7kh0">AUD - Australian Dollar - $</option>
                                        <option data-currency="az" data-select2-id="select2-data-19-g9py">AZN - Azerbaijani Manat - m</option>
                                        <option data-currency="bs" data-select2-id="select2-data-20-1xih">BSD - Bahamian Dollar - B$</option>
                                        <option data-currency="bh" data-select2-id="select2-data-21-1cnv">BHD - Bahraini Dinar - .د.ب</option>
                                        <option data-currency="bd" data-select2-id="select2-data-22-25gx">BDT - Bangladeshi Taka - ৳</option>
                                        <option data-currency="bb" data-select2-id="select2-data-23-u0i9">BBD - Barbadian Dollar - Bds$</option>
                                        <option data-currency="by" data-select2-id="select2-data-24-inrs">BYR - Belarusian Ruble - Br</option>
                                        <option data-currency="be" data-select2-id="select2-data-25-3m1g">BEF - Belgian Franc - fr</option>
                                        <option data-currency="bz" data-select2-id="select2-data-26-n7h6">BZD - Belize Dollar - $</option>
                                        <option data-currency="bm" data-select2-id="select2-data-27-2irn">BMD - Bermudan Dollar - $</option>
                                        <option data-currency="bt" data-select2-id="select2-data-28-dgtg">BTN - Bhutanese Ngultrum - Nu.</option>
                                        <option data-currency="bt" data-select2-id="select2-data-29-su78">BTC - Bitcoin - ฿</option>
                                        <option data-currency="bo" data-select2-id="select2-data-30-3ge7">BOB - Bolivian Boliviano - Bs.</option>
                                        <option data-currency="ba" data-select2-id="select2-data-31-1ir7">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
                                        <option data-currency="bw" data-select2-id="select2-data-32-xjwf">BWP - Botswanan Pula - P</option>
                                        <option data-currency="br" data-select2-id="select2-data-33-w6b2">BRL - Brazilian Real - R$</option>
                                        <option data-currency="gb" data-select2-id="select2-data-34-wcu9">GBP - British Pound Sterling - £</option>
                                        <option data-currency="bn" data-select2-id="select2-data-35-tbyi">BND - Brunei Dollar - B$</option>
                                        <option data-currency="bg" data-select2-id="select2-data-36-k6zq">BGN - Bulgarian Lev - Лв.</option>
                                        <option data-currency="bi" data-select2-id="select2-data-37-hbpt">BIF - Burundian Franc - FBu</option>
                                        <option data-currency="kh" data-select2-id="select2-data-38-j1xx">KHR - Cambodian Riel - KHR</option>
                                        <option data-currency="ca" data-select2-id="select2-data-39-1rdo">CAD - Canadian Dollar - $</option>
                                        <option data-currency="cv" data-select2-id="select2-data-40-t1zr">CVE - Cape Verdean Escudo - $</option>
                                        <option data-currency="ky" data-select2-id="select2-data-41-dmwz">KYD - Cayman Islands Dollar - $</option>
                                        <option data-currency="fr" data-select2-id="select2-data-42-c8hj">XOF - CFA Franc BCEAO - CFA</option>
                                        <option data-currency="fr" data-select2-id="select2-data-43-zqse">XAF - CFA Franc BEAC - FCFA</option>
                                        <option data-currency="fr" data-select2-id="select2-data-44-desl">XPF - CFP Franc - ₣</option>
                                        <option data-currency="cl" data-select2-id="select2-data-45-00bc">CLP - Chilean Peso - $</option>
                                        <option data-currency="cn" data-select2-id="select2-data-46-dbl0">CNY - Chinese Yuan - ¥</option>
                                        <option data-currency="co" data-select2-id="select2-data-47-ia6m">COP - Colombian Peso - $</option>
                                        <option data-currency="km" data-select2-id="select2-data-48-7asw">KMF - Comorian Franc - CF</option>
                                        <option data-currency="cd" data-select2-id="select2-data-49-bh6d">CDF - Congolese Franc - FC</option>
                                        <option data-currency="cr" data-select2-id="select2-data-50-bstn">CRC - Costa Rican ColÃ³n - ₡</option>
                                        <option data-currency="hr" data-select2-id="select2-data-51-1b6a">HRK - Croatian Kuna - kn</option>
                                        <option data-currency="cu" data-select2-id="select2-data-52-gmic">CUC - Cuban Convertible Peso - $, CUC</option>
                                        <option data-currency="cz" data-select2-id="select2-data-53-9j8o">CZK - Czech Republic Koruna - Kč</option>
                                        <option data-currency="dk" data-select2-id="select2-data-54-ho49">DKK - Danish Krone - Kr.</option>
                                        <option data-currency="dj" data-select2-id="select2-data-55-wtig">DJF - Djiboutian Franc - Fdj</option>
                                        <option data-currency="do" data-select2-id="select2-data-56-r3gn">DOP - Dominican Peso - $</option>
                                        <option data-currency="bq" data-select2-id="select2-data-57-0giu">XCD - East Caribbean Dollar - $</option>
                                        <option data-currency="eg" data-select2-id="select2-data-58-a5nf">EGP - Egyptian Pound - ج.م</option>
                                        <option data-currency="er" data-select2-id="select2-data-59-6tkp">ERN - Eritrean Nakfa - Nfk</option>
                                        <option data-currency="ee" data-select2-id="select2-data-60-c6hc">EEK - Estonian Kroon - kr</option>
                                        <option data-currency="et" data-select2-id="select2-data-61-udh0">ETB - Ethiopian Birr - Nkf</option>
                                        <option data-currency="eu" data-select2-id="select2-data-62-r54s">EUR - Euro - €</option>
                                        <option data-currency="fk" data-select2-id="select2-data-63-gfpq">FKP - Falkland Islands Pound - £</option>
                                        <option data-currency="fj" data-select2-id="select2-data-64-zv0h">FJD - Fijian Dollar - FJ$</option>
                                        <option data-currency="gm" data-select2-id="select2-data-65-mkv9">GMD - Gambian Dalasi - D</option>
                                        <option data-currency="ge" data-select2-id="select2-data-66-dgdy">GEL - Georgian Lari - ლ</option>
                                        <option data-currency="de" data-select2-id="select2-data-67-7wqx">DEM - German Mark - DM</option>
                                        <option data-currency="gh" data-select2-id="select2-data-68-gacq">GHS - Ghanaian Cedi - GH₵</option>
                                        <option data-currency="gi" data-select2-id="select2-data-69-njr7">GIP - Gibraltar Pound - £</option>
                                        <option data-currency="gr" data-select2-id="select2-data-70-8rgv">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
                                        <option data-currency="gt" data-select2-id="select2-data-71-cmte">GTQ - Guatemalan Quetzal - Q</option>
                                        <option data-currency="gn" data-select2-id="select2-data-72-p9x8">GNF - Guinean Franc - FG</option>
                                        <option data-currency="gy" data-select2-id="select2-data-73-d5p3">GYD - Guyanaese Dollar - $</option>
                                        <option data-currency="ht" data-select2-id="select2-data-74-nmhi">HTG - Haitian Gourde - G</option>
                                        <option data-currency="hn" data-select2-id="select2-data-75-1cm9">HNL - Honduran Lempira - L</option>
                                        <option data-currency="hk" data-select2-id="select2-data-76-vrti">HKD - Hong Kong Dollar - $</option>
                                        <option data-currency="hu" data-select2-id="select2-data-77-m70c">HUF - Hungarian Forint - Ft</option>
                                        <option data-currency="is" data-select2-id="select2-data-78-a5ed">ISK - Icelandic KrÃ³na - kr</option>
                                        <option data-currency="in" data-select2-id="select2-data-79-1el5">INR - Indian Rupee - ₹</option>
                                        <option data-currency="id" data-select2-id="select2-data-80-6vhl">IDR - Indonesian Rupiah - Rp</option>
                                        <option data-currency="ir" data-select2-id="select2-data-81-473z">IRR - Iranian Rial - ﷼</option>
                                        <option data-currency="iq" data-select2-id="select2-data-82-fa7y">IQD - Iraqi Dinar - د.ع</option>
                                        <option data-currency="il" data-select2-id="select2-data-83-ikpg">ILS - Israeli New Sheqel - ₪</option>
                                        <option data-currency="it" data-select2-id="select2-data-84-ewxm">ITL - Italian Lira - L,£</option>
                                        <option data-currency="jm" data-select2-id="select2-data-85-wsb2">JMD - Jamaican Dollar - J$</option>
                                        <option data-currency="jp" data-select2-id="select2-data-86-2xji">JPY - Japanese Yen - ¥</option>
                                        <option data-currency="jo" data-select2-id="select2-data-87-f8lx">JOD - Jordanian Dinar - ا.د</option>
                                        <option data-currency="kz" data-select2-id="select2-data-88-jkip">KZT - Kazakhstani Tenge - лв</option>
                                        <option data-currency="ke" data-select2-id="select2-data-89-dcyj">KES - Kenyan Shilling - KSh</option>
                                        <option data-currency="kw" data-select2-id="select2-data-90-08tf">KWD - Kuwaiti Dinar - ك.د</option>
                                        <option data-currency="kg" data-select2-id="select2-data-91-7ub3">KGS - Kyrgystani Som - лв</option>
                                        <option data-currency="la" data-select2-id="select2-data-92-zl1g">LAK - Laotian Kip - ₭</option>
                                        <option data-currency="lv" data-select2-id="select2-data-93-a9hp">LVL - Latvian Lats - Ls</option>
                                        <option data-currency="lb" data-select2-id="select2-data-94-o7zf">LBP - Lebanese Pound - £</option>
                                        <option data-currency="ls" data-select2-id="select2-data-95-8ou7">LSL - Lesotho Loti - L</option>
                                        <option data-currency="lr" data-select2-id="select2-data-96-k5zp">LRD - Liberian Dollar - $</option>
                                        <option data-currency="ly" data-select2-id="select2-data-97-ufyw">LYD - Libyan Dinar - د.ل</option>
                                        <option data-currency="lt" data-select2-id="select2-data-98-fvis">LTL - Lithuanian Litas - Lt</option>
                                        <option data-currency="mo" data-select2-id="select2-data-99-93qi">MOP - Macanese Pataca - $</option>
                                        <option data-currency="mk" data-select2-id="select2-data-100-j6pe">MKD - Macedonian Denar - ден</option>
                                        <option data-currency="mg" data-select2-id="select2-data-101-fi2x">MGA - Malagasy Ariary - Ar</option>
                                        <option data-currency="mw" data-select2-id="select2-data-102-ugam">MWK - Malawian Kwacha - MK</option>
                                        <option data-currency="my" data-select2-id="select2-data-103-xv5m">MYR - Malaysian Ringgit - RM</option>
                                        <option data-currency="mv" data-select2-id="select2-data-104-yblg">MVR - Maldivian Rufiyaa - Rf</option>
                                        <option data-currency="mr" data-select2-id="select2-data-105-y16p">MRO - Mauritanian Ouguiya - MRU</option>
                                        <option data-currency="mu" data-select2-id="select2-data-106-dzmf">MUR - Mauritian Rupee - ₨</option>
                                        <option data-currency="mx" data-select2-id="select2-data-107-6af6">MXN - Mexican Peso - $</option>
                                        <option data-currency="md" data-select2-id="select2-data-108-fpgw">MDL - Moldovan Leu - L</option>
                                        <option data-currency="mn" data-select2-id="select2-data-109-0vu4">MNT - Mongolian Tugrik - ₮</option>
                                        <option data-currency="ma" data-select2-id="select2-data-110-mbdr">MAD - Moroccan Dirham - MAD</option>
                                        <option data-currency="mz" data-select2-id="select2-data-111-1i1w">MZM - Mozambican Metical - MT</option>
                                        <option data-currency="mm" data-select2-id="select2-data-112-fdh6">MMK - Myanmar Kyat - K</option>
                                        <option data-currency="na" data-select2-id="select2-data-113-0uls">NAD - Namibian Dollar - $</option>
                                        <option data-currency="np" data-select2-id="select2-data-114-s6g4">NPR - Nepalese Rupee - ₨</option>
                                        <option data-currency="nl" data-select2-id="select2-data-115-q3l7">ANG - Netherlands Antillean Guilder - ƒ</option>
                                        <option data-currency="tw" data-select2-id="select2-data-116-9mwx">TWD - New Taiwan Dollar - $</option>
                                        <option data-currency="nz" data-select2-id="select2-data-117-le2n">NZD - New Zealand Dollar - $</option>
                                        <option data-currency="ni" data-select2-id="select2-data-118-46sw">NIO - Nicaraguan CÃ³rdoba - C$</option>
                                        <option data-currency="ng" data-select2-id="select2-data-119-kj5p">NGN - Nigerian Naira - ₦</option>
                                        <option data-currency="kp" data-select2-id="select2-data-120-qmmy">KPW - North Korean Won - ₩</option>
                                        <option data-currency="no" data-select2-id="select2-data-121-lsr9">NOK - Norwegian Krone - kr</option>
                                        <option data-currency="om" data-select2-id="select2-data-122-tshk">OMR - Omani Rial - .ع.ر</option>
                                        <option data-currency="pk" data-select2-id="select2-data-123-pts4">PKR - Pakistani Rupee - ₨</option>
                                        <option data-currency="pa" data-select2-id="select2-data-124-0moi">PAB - Panamanian Balboa - B/.</option>
                                        <option data-currency="pg" data-select2-id="select2-data-125-7x08">PGK - Papua New Guinean Kina - K</option>
                                        <option data-currency="py" data-select2-id="select2-data-126-jujj">PYG - Paraguayan Guarani - ₲</option>
                                        <option data-currency="pe" data-select2-id="select2-data-127-y3o2">PEN - Peruvian Nuevo Sol - S/.</option>
                                        <option data-currency="ph" data-select2-id="select2-data-128-yrlo">PHP - Philippine Peso - ₱</option>
                                        <option data-currency="pl" data-select2-id="select2-data-129-diow">PLN - Polish Zloty - zł</option>
                                        <option data-currency="qa" data-select2-id="select2-data-130-vvrl">QAR - Qatari Rial - ق.ر</option>
                                        <option data-currency="ro" data-select2-id="select2-data-131-k9kz">RON - Romanian Leu - lei</option>
                                        <option data-currency="ru" data-select2-id="select2-data-132-bxap">RUB - Russian Ruble - ₽</option>
                                        <option data-currency="rw" data-select2-id="select2-data-133-mj50">RWF - Rwandan Franc - FRw</option>
                                        <option data-currency="sv" data-select2-id="select2-data-134-pqxh">SVC - Salvadoran ColÃ³n - ₡</option>
                                        <option data-currency="ws" data-select2-id="select2-data-135-c7jd">WST - Samoan Tala - SAT</option>
                                        <option data-currency="sa" data-select2-id="select2-data-136-qqe3">SAR - Saudi Riyal - ﷼</option>
                                        <option data-currency="sr" data-select2-id="select2-data-137-echb">RSD - Serbian Dinar - din</option>
                                        <option data-currency="sc" data-select2-id="select2-data-138-3d48">SCR - Seychellois Rupee - SRe</option>
                                        <option data-currency="sl" data-select2-id="select2-data-139-6ff2">SLL - Sierra Leonean Leone - Le</option>
                                        <option data-currency="sg" data-select2-id="select2-data-140-vvxg">SGD - Singapore Dollar - $</option>
                                        <option data-currency="sk" data-select2-id="select2-data-141-7gku">SKK - Slovak Koruna - Sk</option>
                                        <option data-currency="sb" data-select2-id="select2-data-142-5zlb">SBD - Solomon Islands Dollar - Si$</option>
                                        <option data-currency="so" data-select2-id="select2-data-143-tqdw">SOS - Somali Shilling - Sh.so.</option>
                                        <option data-currency="za" data-select2-id="select2-data-144-6e8k">ZAR - South African Rand - R</option>
                                        <option data-currency="kr" data-select2-id="select2-data-145-zoqy">KRW - South Korean Won - ₩</option>
                                        <option data-currency="lk" data-select2-id="select2-data-146-1p5g">LKR - Sri Lankan Rupee - Rs</option>
                                        <option data-currency="sh" data-select2-id="select2-data-147-jk1z">SHP - St. Helena Pound - £</option>
                                        <option data-currency="sd" data-select2-id="select2-data-148-joif">SDG - Sudanese Pound - .س.ج</option>
                                        <option data-currency="sr" data-select2-id="select2-data-149-uu6b">SRD - Surinamese Dollar - $</option>
                                        <option data-currency="sz" data-select2-id="select2-data-150-lhmq">SZL - Swazi Lilangeni - E</option>
                                        <option data-currency="se" data-select2-id="select2-data-151-h2cp">SEK - Swedish Krona - kr</option>
                                        <option data-currency="ch" data-select2-id="select2-data-152-cjpx">CHF - Swiss Franc - CHf</option>
                                        <option data-currency="sy" data-select2-id="select2-data-153-h1ha">SYP - Syrian Pound - LS</option>
                                        <option data-currency="st" data-select2-id="select2-data-154-0620">STD - São Tomé and Príncipe Dobra - Db</option>
                                        <option data-currency="tj" data-select2-id="select2-data-155-6mdr">TJS - Tajikistani Somoni - SM</option>
                                        <option data-currency="tz" data-select2-id="select2-data-156-cet9">TZS - Tanzanian Shilling - TSh</option>
                                        <option data-currency="th" data-select2-id="select2-data-157-tj96">THB - Thai Baht - ฿</option>
                                        <option data-currency="to" data-select2-id="select2-data-158-3osd">TOP - Tongan pa'anga - $</option>
                                        <option data-currency="tt" data-select2-id="select2-data-159-mhps">TTD - Trinidad &amp; Tobago Dollar - $</option>
                                        <option data-currency="tn" data-select2-id="select2-data-160-vvk7">TND - Tunisian Dinar - ت.د</option>
                                        <option data-currency="tr" data-select2-id="select2-data-161-edn0">TRY - Turkish Lira - ₺</option>
                                        <option data-currency="tm" data-select2-id="select2-data-162-afp7">TMT - Turkmenistani Manat - T</option>
                                        <option data-currency="ug" data-select2-id="select2-data-163-rx2e">UGX - Ugandan Shilling - USh</option>
                                        <option data-currency="ua" data-select2-id="select2-data-164-euwh">UAH - Ukrainian Hryvnia - ₴</option>
                                        <option data-currency="ae" data-select2-id="select2-data-165-9fjc">AED - United Arab Emirates Dirham - إ.د</option>
                                        <option data-currency="uy" data-select2-id="select2-data-166-e4rp">UYU - Uruguayan Peso - $</option>
                                        <option data-currency="us" selected="" data-select2-id="select2-data-3-am3k">USD - US Dollar - $</option>
                                        <option data-currency="uz" data-select2-id="select2-data-167-6lpp">UZS - Uzbekistan Som - лв</option>
                                        <option data-currency="vu" data-select2-id="select2-data-168-zdlw">VUV - Vanuatu Vatu - VT</option>
                                        <option data-currency="ve" data-select2-id="select2-data-169-bo0t">VEF - Venezuelan BolÃ­var - Bs</option>
                                        <option data-currency="vn" data-select2-id="select2-data-170-804a">VND - Vietnamese Dong - ₫</option>
                                        <option data-currency="ye" data-select2-id="select2-data-171-y9tr">YER - Yemeni Rial - ﷼</option>
                                        <option data-currency="zm" data-select2-id="select2-data-172-h3xz">ZMK - Zambian Kwacha - ZK</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap-5 select2-container--focus select2-container--above" dir="ltr" data-select2-id="select2-data-1-qlh5" style="width: 1px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-2-1qur" style="width: 327.862px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="number" id="itemDiscount" class="form-control" placeholder="Discount">
                                </div>
                                <div class="ps-0 mb-3 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="LateFees">
                                        <span>Late Fees</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Late fees for extra charge</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="LateFees" checked="checked">
                                </div>
                                <div class="ps-0 mb-3 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="ClientNote">
                                        <span>Client Notes</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Client notes for further query</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="ClientNote">
                                </div>
                                <div class="ps-0 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="SavePayment">
                                        <span>Save Payment</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Save payment for quick payout</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="SavePayment">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Cancel Invoce</h6>
                                        <span class="fs-12 text-muted">Cancel invoice for ever.</span>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light-brand">Nevermind</a>
                                </div>
                                <p class="fs-12 text-muted mb-4">Are you sure you want to cancel this invoice? Neigther you nor alex will able to make any(more) payments on it.</p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notifyMe" checked="">
                                    <label class="custom-control-label c-pointer" for="notifyMe">Notify alex that this invoice was cancelled.</label>
                                </div>
                                <a href="javascript:void(0);" class="btn bg-soft-danger text-danger mt-4 successAlertMessage">Cancel this Invoice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        
        <!-- [ Footer ] start -->
       
        <!-- [ Footer ] end -->
    
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
    <script src="{{asset('assets/vendors/js/cleave.min.js');}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('assets/js/common-init.min.js');}}"></script>
    <script src="{{asset('assets/js/invoice-create-init.min.js');}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_row").click(function() {
                b = i - 1;
                $("#addr" + i)
                    .html($("#addr" + b).html())
                    .find("td:first-child")
                    .html(i + 1);
                $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
                i++;
            });
            $("#delete_row").click(function() {
                if (i > 1) {
                    $("#addr" + (i - 1)).html("");
                    i--;
                }
                calc();
            });
            $("#tab_logic tbody").on("keyup change", function() {
                calc();
            });
            $("#tax").on("keyup change", function() {
                calc_total();
            });
        });

        function calc() {
            $("#tab_logic tbody tr").each(function(i, element) {
                var html = $(this).html();
                if (html != "") {
                    var qty = $(this).find(".qty").val();
                    var price = $(this).find(".price").val();
                    $(this)
                        .find(".total")
                        .val(qty * price);
                    calc_total();
                }
            });
        }

        function calc_total() {
            total = 0;
            $(".total").each(function() {
                total += parseInt($(this).val());
            });
            $("#sub_total").val(total.toFixed(2));
            tax_sum = (total / 100) * $("#tax").val();
            $("#tax_amount").val(tax_sum.toFixed(2));
            $("#total_amount").val((tax_sum + total).toFixed(2));
        }
    </script>
@endsection