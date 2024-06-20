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
<div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Customers</h5>
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
                                <i class="feather-user-plus me-2"></i>
                                <span>Create Customer</span>
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
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="card-header p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab" role="tab" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#passwordTab" role="tab" aria-selected="false">Password</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#billingTab" role="tab" aria-selected="false">Billing &amp; Shipping</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#subscriptionTab" role="tab" aria-selected="false">Subscription</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#notificationsTab" role="tab" aria-selected="false">Notifications</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#connectionTab" role="tab" aria-selected="false">Connection</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Personal Information:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Following information is publicly displayed, be careful! </span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Add New</a>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Avatar: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="mb-4 mb-md-0 d-flex gap-4 your-brand">
                                                    <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                                        <img src="assets/images/avatar/1.png" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                                        <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                                            <i class="feather feather-camera" aria-hidden="true"></i>
                                                        </div>
                                                        <input class="file-upload" type="file" accept="image/*">
                                                    </div>
                                                    <div class="d-flex flex-column gap-1">
                                                        <div class="fs-11 text-gray-500 mt-2"># Upload your prifile</div>
                                                        <div class="fs-11 text-gray-500"># Avatar size 150x150</div>
                                                        <div class="fs-11 text-gray-500"># Max upload size 2mb</div>
                                                        <div class="fs-11 text-gray-500"># Allowed file types: png, jpg, jpeg</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="fullnameInput" class="fw-semibold">Name: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-user"></i></div>
                                                    <input type="text" class="form-control" id="fullnameInput" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="mailInput" class="fw-semibold">Email: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-mail"></i></div>
                                                    <input type="text" class="form-control" id="mailInput" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="usernameInput" class="fw-semibold">Username: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-link-2"></i></div>
                                                    <div class="input-group-text">https://www.wrapcoders.com/</div>
                                                    <input type="url" class="form-control" id="usernameInput" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="phoneInput" class="fw-semibold">Phone: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-phone"></i></div>
                                                    <input type="text" class="form-control" id="phoneInput" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="companyInput" class="fw-semibold">Company: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-compass"></i></div>
                                                    <input type="text" class="form-control" id="companyInput" placeholder="Company">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="designationInput" class="fw-semibold">Designation: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-briefcase"></i></div>
                                                    <input type="text" class="form-control" id="designationInput" placeholder="Designation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="websiteInput" class="fw-semibold">Website: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-link"></i></div>
                                                    <input type="text" class="form-control" id="websiteInput" placeholder="Website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="VATInput" class="fw-semibold">VAT: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-dollar-sign"></i></div>
                                                    <input type="text" class="form-control" id="VATInput" placeholder="VAT">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="addressInput_2" class="fw-semibold">Address: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-map-pin"></i></div>
                                                    <textarea class="form-control" id="addressInput_2" cols="30" rows="3" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="aboutInput" class="fw-semibold">About: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-type"></i></div>
                                                    <textarea class="form-control" id="aboutInput" cols="30" rows="5" placeholder="About"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body additional-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Additional Information:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Communication details in case we want to connect with you.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Add New</a>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="dateofBirth" class="fw-semibold">Date of Birth: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-calendar"></i></div>
                                                    <input class="form-control datepicker-input" id="dateofBirth" placeholder="Pick date of birth"><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-top" style="left: 382.4px; top: 1712.2px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">June 2024</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1716661800000">26</span><span class="datepicker-cell day prev" data-date="1716748200000">27</span><span class="datepicker-cell day prev" data-date="1716834600000">28</span><span class="datepicker-cell day prev" data-date="1716921000000">29</span><span class="datepicker-cell day prev" data-date="1717007400000">30</span><span class="datepicker-cell day prev" data-date="1717093800000">31</span><span class="datepicker-cell day" data-date="1717180200000">1</span><span class="datepicker-cell day" data-date="1717266600000">2</span><span class="datepicker-cell day focused" data-date="1717353000000">3</span><span class="datepicker-cell day" data-date="1717439400000">4</span><span class="datepicker-cell day" data-date="1717525800000">5</span><span class="datepicker-cell day" data-date="1717612200000">6</span><span class="datepicker-cell day" data-date="1717698600000">7</span><span class="datepicker-cell day" data-date="1717785000000">8</span><span class="datepicker-cell day" data-date="1717871400000">9</span><span class="datepicker-cell day" data-date="1717957800000">10</span><span class="datepicker-cell day" data-date="1718044200000">11</span><span class="datepicker-cell day" data-date="1718130600000">12</span><span class="datepicker-cell day" data-date="1718217000000">13</span><span class="datepicker-cell day" data-date="1718303400000">14</span><span class="datepicker-cell day" data-date="1718389800000">15</span><span class="datepicker-cell day" data-date="1718476200000">16</span><span class="datepicker-cell day" data-date="1718562600000">17</span><span class="datepicker-cell day" data-date="1718649000000">18</span><span class="datepicker-cell day" data-date="1718735400000">19</span><span class="datepicker-cell day" data-date="1718821800000">20</span><span class="datepicker-cell day" data-date="1718908200000">21</span><span class="datepicker-cell day" data-date="1718994600000">22</span><span class="datepicker-cell day" data-date="1719081000000">23</span><span class="datepicker-cell day" data-date="1719167400000">24</span><span class="datepicker-cell day" data-date="1719253800000">25</span><span class="datepicker-cell day" data-date="1719340200000">26</span><span class="datepicker-cell day" data-date="1719426600000">27</span><span class="datepicker-cell day" data-date="1719513000000">28</span><span class="datepicker-cell day" data-date="1719599400000">29</span><span class="datepicker-cell day" data-date="1719685800000">30</span><span class="datepicker-cell day next" data-date="1719772200000">1</span><span class="datepicker-cell day next" data-date="1719858600000">2</span><span class="datepicker-cell day next" data-date="1719945000000">3</span><span class="datepicker-cell day next" data-date="1720031400000">4</span><span class="datepicker-cell day next" data-date="1720117800000">5</span><span class="datepicker-cell day next" data-date="1720204200000">6</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn">Clear</button></div></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Country: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="country" data-select2-id="select2-data-49-n8rt" tabindex="-1" aria-hidden="true">
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
                                                    <option data-country="us" selected="" data-select2-id="select2-data-51-9p4o">United States</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-50-rnzo" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8hhu-container" aria-controls="select2-8hhu-container"><span class="select2-selection__rendered" id="select2-8hhu-container" role="textbox" aria-readonly="true" title="United States"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/1x1/us.svg" class="avatar-image avatar-sm"> United States</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">State: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="state" data-select2-id="select2-data-61-4lzd" tabindex="-1" aria-hidden="true">
                                                    <option data-state="al">Alabama</option>
                                                    <option data-state="ak" selected="" data-select2-id="select2-data-63-t4on">Alaska</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-62-ss9m" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-qbqj-container" aria-controls="select2-qbqj-container"><span class="select2-selection__rendered" id="select2-qbqj-container" role="textbox" aria-readonly="true" title="Alaska"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/us/ak.png" class="avatar-image avatar-sm"> Alaska</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">City: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="city" data-select2-id="select2-data-70-txkv" tabindex="-1" aria-hidden="true">
                                                    <option data-city="bg-primary">Akutan</option>
                                                    <option data-city="bg-secondary">Aleutians East Borough</option>
                                                    <option data-city="bg-success">Aleutians West Census Area</option>
                                                    <option data-city="bg-warning">Anchor Point</option>
                                                    <option data-city="bg-info">Anchorage</option>
                                                    <option data-city="bg-danger">Anchorage Municipality</option>
                                                    <option data-city="bg-dark">Badger</option>
                                                    <option data-city="bg-black">Barrow</option>
                                                    <option data-city="bg-muted">Bear Creek</option>
                                                    <option data-city="bg-blue">Bethel</option>
                                                    <option data-city="bg-teal">Bethel Census Area</option>
                                                    <option data-city="bg-cyan">Big Lake</option>
                                                    <option data-city="bg-indigo">Bristol Bay Borough</option>
                                                    <option data-city="bg-green">Butte</option>
                                                    <option data-city="bg-red">Chevak</option>
                                                    <option data-city="bg-orange">City and Borough of Wrangell</option>
                                                    <option data-city="bg-darken">Cohoe</option>
                                                    <option data-city="bg-primary">College</option>
                                                    <option data-city="bg-warning">Cordova</option>
                                                    <option data-city="bg-danger">Craig</option>
                                                    <option data-city="bg-red">Deltana</option>
                                                    <option data-city="bg-green">Denali Borough</option>
                                                    <option data-city="bg-orange">Diamond Ridge</option>
                                                    <option data-city="bg-muted">Dillingham</option>
                                                    <option data-city="bg-teal">Dillingham Census Area</option>
                                                    <option data-city="bg-info">Dutch Harbor</option>
                                                    <option data-city="bg-indigo">Eagle River</option>
                                                    <option data-city="bg-cyan">Eielson Air Force Base</option>
                                                    <option data-city="bg-orange">Elmendorf Air Force Base</option>
                                                    <option data-city="bg-black">Ester</option>
                                                    <option data-city="bg-warning">Fairbanks</option>
                                                    <option data-city="bg-green">Fairbanks North Star Borough</option>
                                                    <option data-city="bg-indigo">Farm Loop</option>
                                                    <option data-city="bg-danger">Farmers Loop</option>
                                                    <option data-city="bg-success">Fishhook</option>
                                                    <option data-city="bg-teal">Fritz Creek</option>
                                                    <option data-city="bg-cyan">Gateway</option>
                                                    <option data-city="bg-black">Girdwood</option>
                                                    <option data-city="bg-warning">Haines</option>
                                                    <option data-city="bg-green">Haines Borough</option>
                                                    <option data-city="bg-indigo">Healy</option>
                                                    <option data-city="bg-danger">Homer</option>
                                                    <option data-city="bg-success">Hoonah-Angoon Census Area</option>
                                                    <option data-city="bg-teal">Hooper Bay</option>
                                                    <option data-city="bg-cyan">Houston</option>
                                                    <option data-city="bg-warning">Juneau</option>
                                                    <option data-city="bg-black">Kalifornsky</option>
                                                    <option data-city="bg-green">Kenai</option>
                                                    <option data-city="bg-danger">Kenai Peninsula Borough</option>
                                                    <option data-city="bg-success">Ketchikan</option>
                                                    <option data-city="bg-indigo">Ketchikan Gateway Borough</option>
                                                    <option data-city="bg-teal" selected="" data-select2-id="select2-data-72-zctj">King Cove</option>
                                                    <option data-city="bg-black">Knik-Fairview</option>
                                                    <option data-city="bg-green">Kodiak</option>
                                                    <option data-city="bg-cyan">Kodiak Island Borough</option>
                                                    <option data-city="bg-warning">Kodiak Station</option>
                                                    <option data-city="bg-darken">Kotzebue</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-71-b33q" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kfxt-container" aria-controls="select2-kfxt-container"><span class="select2-selection__rendered" id="select2-kfxt-container" role="textbox" aria-readonly="true" title="King Cove"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> King Cove</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Time Zone: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="tzone" data-select2-id="select2-data-58-0tdj" tabindex="-1" aria-hidden="true">
                                                    <option data-tzone="feather-moon">(GMT -12:00) Eniwetok, Kwajalein</option>
                                                    <option data-tzone="feather-moon">(GMT -11:00) Midway Island, Samoa</option>
                                                    <option data-tzone="feather-moon">(GMT -10:00) Hawaii</option>
                                                    <option data-tzone="feather-moon">(GMT -9:30) Taiohae</option>
                                                    <option data-tzone="feather-moon">(GMT -9:00) Alaska</option>
                                                    <option data-tzone="feather-moon">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                                    <option data-tzone="feather-moon">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                                    <option data-tzone="feather-moon">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                                    <option data-tzone="feather-moon">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                                    <option data-tzone="feather-moon">(GMT -4:30) Caracas</option>
                                                    <option data-tzone="feather-moon">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                                    <option data-tzone="feather-moon">(GMT -3:30) Newfoundland</option>
                                                    <option data-tzone="feather-moon">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                                    <option data-tzone="feather-moon">(GMT -2:00) Mid-Atlantic</option>
                                                    <option data-tzone="feather-moon">(GMT -1:00) Azores, Cape Verde Islands</option>
                                                    <option data-tzone="feather-sunrise" selected="" data-select2-id="select2-data-60-idd4">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                    <option data-tzone="feather-sun">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                    <option data-tzone="feather-sun">(GMT +2:00) Kaliningrad, South Africa</option>
                                                    <option data-tzone="feather-sun">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                                    <option data-tzone="feather-sun">(GMT +3:30) Tehran</option>
                                                    <option data-tzone="feather-sun">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                                    <option data-tzone="feather-sun">(GMT +4:30) Kabul</option>
                                                    <option data-tzone="feather-sun">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                                    <option data-tzone="feather-sun">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                                    <option data-tzone="feather-sun">(GMT +5:45) Kathmandu, Pokhara</option>
                                                    <option data-tzone="feather-sun">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                                    <option data-tzone="feather-sun">(GMT +6:30) Yangon, Mandalay</option>
                                                    <option data-tzone="feather-sun">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                                    <option data-tzone="feather-sun">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                                    <option data-tzone="feather-sun">(GMT +8:45) Eucla</option>
                                                    <option data-tzone="feather-sun">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                                    <option data-tzone="feather-sun">(GMT +9:30) Adelaide, Darwin</option>
                                                    <option data-tzone="feather-sun">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                                    <option data-tzone="feather-sun">(GMT +10:30) Lord Howe Island</option>
                                                    <option data-tzone="feather-sun">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                                    <option data-tzone="feather-sun">(GMT +11:30) Norfolk Island</option>
                                                    <option data-tzone="feather-sun">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                                    <option data-tzone="feather-sun">(GMT +12:45) Chatham Islands</option>
                                                    <option data-tzone="feather-sun">(GMT +13:00) Apia, Nukualofa</option>
                                                    <option data-tzone="feather-sun">(GMT +14:00) Line Islands, Tokelau</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-59-gkzb" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-yruj-container" aria-controls="select2-yruj-container"><span class="select2-selection__rendered" id="select2-yruj-container" role="textbox" aria-readonly="true" title="(GMT) Western Europe Time, London, Lisbon, Casablanca"><span class="hstack gap-3 text-truncate-1-line"> <i class="me-2 feather-sunrise"></i> (GMT) Western Europe Time, London, Lisbon, Casablanca</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Languages: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="language" multiple="" data-select2-id="select2-data-79-jrxi" tabindex="-1" aria-hidden="true">
                                                    <option data-language="bg-primary">Afrikaans</option>
                                                    <option data-language="bg-warning">Albanian - shqip</option>
                                                    <option data-language="bg-cyan">Amharic - አማርኛ</option>
                                                    <option data-language="bg-green">Arabic - العربية</option>
                                                    <option data-language="bg-black">Aragonese - aragonés</option>
                                                    <option data-language="bg-teal">Armenian - հայերեն</option>
                                                    <option data-language="bg-success">Asturian - asturianu</option>
                                                    <option data-language="bg-cyan">Azerbaijani - azərbaycan dili</option>
                                                    <option data-language="bg-indigo">Basque - euskara</option>
                                                    <option data-language="bg-teal">Belarusian - беларуская</option>
                                                    <option data-language="bg-black" selected="" data-select2-id="select2-data-81-ebwc">Bengali - বাংলা</option>
                                                    <option data-language="bg-green">Bosnian - bosanski</option>
                                                    <option data-language="bg-primary">Breton - brezhoneg</option>
                                                    <option data-language="bg-warning">Bulgarian - български</option>
                                                    <option data-language="bg-teal">Catalan - català</option>
                                                    <option data-language="bg-black">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                                    <option data-language="bg-green">Chinese - 中文</option>
                                                    <option data-language="bg-cyan">Chinese (Hong Kong) - 中文（香港）</option>
                                                    <option data-language="bg-primary">Chinese (Simplified) - 中文（简体）</option>
                                                    <option data-language="bg-danger">Chinese (Traditional) - 中文（繁體）</option>
                                                    <option data-language="bg-cyan">Corsican</option>
                                                    <option data-language="bg-black">Croatian - hrvatski</option>
                                                    <option data-language="bg-warning">Czech - čeština</option>
                                                    <option data-language="bg-primary">Danish - dansk</option>
                                                    <option data-language="bg-teal">Dutch - Nederlands</option>
                                                    <option data-language="bg-danger" selected="" data-select2-id="select2-data-82-avaz">English</option>
                                                    <option data-language="bg-green">English (Australia)</option>
                                                    <option data-language="bg-black">English (Canada)</option>
                                                    <option data-language="bg-cyan">English (India)</option>
                                                    <option data-language="bg-primary">English (New Zealand)</option>
                                                    <option data-language="bg-indigo">English (South Africa)</option>
                                                    <option data-language="bg-black">English (United Kingdom)</option>
                                                    <option data-language="bg-teal">English (United States)</option>
                                                    <option data-language="bg-green">Esperanto - esperanto</option>
                                                    <option data-language="bg-cyan">Estonian - eesti</option>
                                                    <option data-language="bg-primary">Faroese - føroyskt</option>
                                                    <option data-language="bg-black">Filipino</option>
                                                    <option data-language="bg-cyan">Finnish - suomi</option>
                                                    <option data-language="bg-primary">French - français</option>
                                                    <option data-language="bg-success">French (Canada) - français (Canada)</option>
                                                    <option data-language="bg-warning">French (France) - français (France)</option>
                                                    <option data-language="bg-black">French (Switzerland) - français (Suisse)</option>
                                                    <option data-language="bg-primary">Galician - galego</option>
                                                    <option data-language="bg-teal">Georgian - ქართული</option>
                                                    <option data-language="bg-black">German - Deutsch</option>
                                                    <option data-language="bg-green">German (Austria) - Deutsch (Österreich)</option>
                                                    <option data-language="bg-danger">German (Germany) - Deutsch (Deutschland)</option>
                                                    <option data-language="bg-indigo">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                                    <option data-language="bg-cyan">German (Switzerland) - Deutsch (Schweiz)</option>
                                                    <option data-language="bg-primary">Greek - Ελληνικά</option>
                                                    <option data-language="bg-green">Guarani</option>
                                                    <option data-language="bg-teal">Gujarati - ગુજરાતી</option>
                                                    <option data-language="bg-success">Hausa</option>
                                                    <option data-language="bg-primary">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                                    <option data-language="bg-cyan">Hebrew - עברית</option>
                                                    <option data-language="bg-warning" selected="" data-select2-id="select2-data-83-4txm">Hindi - हिन्दी</option>
                                                    <option data-language="bg-green">Hungarian - magyar</option>
                                                    <option data-language="bg-black">Icelandic - íslenska</option>
                                                    <option data-language="bg-danger">Indonesian - Indonesia</option>
                                                    <option data-language="bg-primary">Interlingua</option>
                                                    <option data-language="bg-green">Irish - Gaeilge</option>
                                                    <option data-language="bg-success">Italian - italiano</option>
                                                    <option data-language="bg-cyan">Italian (Italy) - italiano (Italia)</option>
                                                    <option data-language="bg-teal">Italian (Switzerland) - italiano (Svizzera)</option>
                                                    <option data-language="bg-indigo">Japanese - 日本語</option>
                                                    <option data-language="bg-primary">Kannada - ಕನ್ನಡ</option>
                                                    <option data-language="bg-cyan">Kazakh - қазақ тілі</option>
                                                    <option data-language="bg-black">Khmer - ខ្មែរ</option>
                                                    <option data-language="bg-primary">Korean - 한국어</option>
                                                    <option data-language="bg-warning">Kurdish - Kurdî</option>
                                                    <option data-language="bg-cyan">Kyrgyz - кыргызча</option>
                                                    <option data-language="bg-danger">Lao - ລາວ</option>
                                                    <option data-language="bg-primary">Latin</option>
                                                    <option data-language="bg-orange">Latvian - latviešu</option>
                                                    <option data-language="bg-green">Lingala - lingála</option>
                                                    <option data-language="bg-black">Lithuanian - lietuvių</option>
                                                    <option data-language="bg-primary">Macedonian - македонски</option>
                                                    <option data-language="bg-indigo">Malay - Bahasa Melayu</option>
                                                    <option data-language="bg-green">Malayalam - മലയാളം</option>
                                                    <option data-language="bg-cyan">Maltese - Malti</option>
                                                    <option data-language="bg-teal">Marathi - मराठी</option>
                                                    <option data-language="bg-primary">Mongolian - монгол</option>
                                                    <option data-language="bg-danger">Nepali - नेपाली</option>
                                                    <option data-language="bg-green">Norwegian - norsk</option>
                                                    <option data-language="bg-warning">Norwegian Bokmål - norsk bokmål</option>
                                                    <option data-language="bg-primary">Norwegian Nynorsk - nynorsk</option>
                                                    <option data-language="bg-success">Occitan</option>
                                                    <option data-language="bg-cyan">Oriya - ଓଡ଼ିଆ</option>
                                                    <option data-language="bg-black">Oromo - Oromoo</option>
                                                    <option data-language="bg-danger">Pashto - پښتو</option>
                                                    <option data-language="bg-green">Persian - فارسی</option>
                                                    <option data-language="bg-primary">Polish - polski</option>
                                                    <option data-language="bg-teal">Portuguese - português</option>
                                                    <option data-language="bg-danger">Portuguese (Brazil) - português (Brasil)</option>
                                                    <option data-language="bg-black">Portuguese (Portugal) - português (Portugal)</option>
                                                    <option data-language="bg-green">Punjabi - ਪੰਜਾਬੀ</option>
                                                    <option data-language="bg-indigo">Quechua</option>
                                                    <option data-language="bg-success">Romanian - română</option>
                                                    <option data-language="bg-warning">Romanian (Moldova) - română (Moldova)</option>
                                                    <option data-language="bg-primary">Romansh - rumantsch</option>
                                                    <option data-language="bg-danger">Russian - русский</option>
                                                    <option data-language="bg-green">Scottish Gaelic</option>
                                                    <option data-language="bg-orange">Serbian - српски</option>
                                                    <option data-language="bg-teal">Serbo - Croatian</option>
                                                    <option data-language="bg-primary">Shona - chiShona</option>
                                                    <option data-language="bg-cyan">Sindhi</option>
                                                    <option data-language="bg-black">Sinhala - සිංහල</option>
                                                    <option data-language="bg-warning">Slovak - slovenčina</option>
                                                    <option data-language="bg-danger">Slovenian - slovenščina</option>
                                                    <option data-language="bg-green">Somali - Soomaali</option>
                                                    <option data-language="bg-primary">Southern Sotho</option>
                                                    <option data-language="bg-orange">Spanish - español</option>
                                                    <option data-language="bg-indigo">Spanish (Argentina) - español (Argentina)</option>
                                                    <option data-language="bg-green">Spanish (Latin America) - español (Latinoamérica)</option>
                                                    <option data-language="bg-cyan">Spanish (Mexico) - español (México)</option>
                                                    <option data-language="bg-black">Spanish (Spain) - español (España)</option>
                                                    <option data-language="bg-success">Spanish (United States) - español (Estados Unidos)</option>
                                                    <option data-language="bg-primary">Sundanese</option>
                                                    <option data-language="bg-teal">Swahili - Kiswahili</option>
                                                    <option data-language="bg-green">Swedish - svenska</option>
                                                    <option data-language="bg-cyan">Tajik - тоҷикӣ</option>
                                                    <option data-language="bg-warning">Tamil - தமிழ்</option>
                                                    <option data-language="bg-primary">Tatar</option>
                                                    <option data-language="bg-success">Telugu - తెలుగు</option>
                                                    <option data-language="bg-black">Thai - ไทย</option>
                                                    <option data-language="bg-green">Tigrinya - ትግርኛ</option>
                                                    <option data-language="bg-teal">Tongan - lea fakatonga</option>
                                                    <option data-language="bg-primary">Turkish - Türkçe</option>
                                                    <option data-language="bg-danger">Turkmen</option>
                                                    <option data-language="bg-indigo">Twi</option>
                                                    <option data-language="bg-black">Ukrainian - українська</option>
                                                    <option data-language="bg-green">Urdu - اردو</option>
                                                    <option data-language="bg-cyan">Uyghur</option>
                                                    <option data-language="bg-primary">Uzbek - o‘zbek</option>
                                                    <option data-language="bg-success">Vietnamese - Tiếng Việt</option>
                                                    <option data-language="bg-cyan">Walloon - wa</option>
                                                    <option data-language="bg-primary">Welsh - Cymraeg</option>
                                                    <option data-language="bg-teal">Western Frisian</option>
                                                    <option data-language="bg-warning">Xhosa</option>
                                                    <option data-language="bg-indigo">Yiddish</option>
                                                    <option data-language="bg-green">Yoruba - Èdè Yorùbá</option>
                                                    <option data-language="bg-black">Zulu - isiZulu</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-80-s3q8" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-gek5-container"><li class="select2-selection__choice" title="Bengali - বাংলা" data-select2-id="select2-data-84-xq2w"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-gek5-container-choice-h9xv-Bengali - বাংলা"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-gek5-container-choice-h9xv-Bengali - বাংলা"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-black"></span> Bengali - বাংলা</span></span></li><li class="select2-selection__choice" title="English" data-select2-id="select2-data-85-ks67"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-gek5-container-choice-4p9f-English"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-gek5-container-choice-4p9f-English"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-danger"></span> English</span></span></li><li class="select2-selection__choice" title="Hindi - हिन्दी" data-select2-id="select2-data-86-nor8"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-gek5-container-choice-qavm-Hindi - हिन्दी"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-gek5-container-choice-qavm-Hindi - हिन्दी"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-warning"></span> Hindi - हिन्दी</span></span></li></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-gek5-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Currency: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="currency" data-select2-id="select2-data-87-r3lv" tabindex="-1" aria-hidden="true">
                                                    <option data-currency="af">AFN - Afghan Afghani - ؋</option>
                                                    <option data-currency="al">ALL - Albanian Lek - Lek</option>
                                                    <option data-currency="dz">DZD - Algerian Dinar - دج</option>
                                                    <option data-currency="ao">AOA - Angolan Kwanza - Kz</option>
                                                    <option data-currency="ar">ARS - Argentine Peso - $</option>
                                                    <option data-currency="am">AMD - Armenian Dram - ֏</option>
                                                    <option data-currency="aw">AWG - Aruban Florin - ƒ</option>
                                                    <option data-currency="au">AUD - Australian Dollar - $</option>
                                                    <option data-currency="az">AZN - Azerbaijani Manat - m</option>
                                                    <option data-currency="bs">BSD - Bahamian Dollar - B$</option>
                                                    <option data-currency="bh">BHD - Bahraini Dinar - .د.ب</option>
                                                    <option data-currency="bd">BDT - Bangladeshi Taka - ৳</option>
                                                    <option data-currency="bb">BBD - Barbadian Dollar - Bds$</option>
                                                    <option data-currency="by">BYR - Belarusian Ruble - Br</option>
                                                    <option data-currency="be">BEF - Belgian Franc - fr</option>
                                                    <option data-currency="bz">BZD - Belize Dollar - $</option>
                                                    <option data-currency="bm">BMD - Bermudan Dollar - $</option>
                                                    <option data-currency="bt">BTN - Bhutanese Ngultrum - Nu.</option>
                                                    <option data-currency="bt">BTC - Bitcoin - ฿</option>
                                                    <option data-currency="bo">BOB - Bolivian Boliviano - Bs.</option>
                                                    <option data-currency="ba">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
                                                    <option data-currency="bw">BWP - Botswanan Pula - P</option>
                                                    <option data-currency="br">BRL - Brazilian Real - R$</option>
                                                    <option data-currency="gb">GBP - British Pound Sterling - £</option>
                                                    <option data-currency="bn">BND - Brunei Dollar - B$</option>
                                                    <option data-currency="bg">BGN - Bulgarian Lev - Лв.</option>
                                                    <option data-currency="bi">BIF - Burundian Franc - FBu</option>
                                                    <option data-currency="kh">KHR - Cambodian Riel - KHR</option>
                                                    <option data-currency="ca">CAD - Canadian Dollar - $</option>
                                                    <option data-currency="cv">CVE - Cape Verdean Escudo - $</option>
                                                    <option data-currency="ky">KYD - Cayman Islands Dollar - $</option>
                                                    <option data-currency="fr">XOF - CFA Franc BCEAO - CFA</option>
                                                    <option data-currency="fr">XAF - CFA Franc BEAC - FCFA</option>
                                                    <option data-currency="fr">XPF - CFP Franc - ₣</option>
                                                    <option data-currency="cl">CLP - Chilean Peso - $</option>
                                                    <option data-currency="cn">CNY - Chinese Yuan - ¥</option>
                                                    <option data-currency="co">COP - Colombian Peso - $</option>
                                                    <option data-currency="km">KMF - Comorian Franc - CF</option>
                                                    <option data-currency="cd">CDF - Congolese Franc - FC</option>
                                                    <option data-currency="cr">CRC - Costa Rican ColÃ³n - ₡</option>
                                                    <option data-currency="hr">HRK - Croatian Kuna - kn</option>
                                                    <option data-currency="cu">CUC - Cuban Convertible Peso - $, CUC</option>
                                                    <option data-currency="cz">CZK - Czech Republic Koruna - Kč</option>
                                                    <option data-currency="dk">DKK - Danish Krone - Kr.</option>
                                                    <option data-currency="dj">DJF - Djiboutian Franc - Fdj</option>
                                                    <option data-currency="do">DOP - Dominican Peso - $</option>
                                                    <option data-currency="bq">XCD - East Caribbean Dollar - $</option>
                                                    <option data-currency="eg">EGP - Egyptian Pound - ج.م</option>
                                                    <option data-currency="er">ERN - Eritrean Nakfa - Nfk</option>
                                                    <option data-currency="ee">EEK - Estonian Kroon - kr</option>
                                                    <option data-currency="et">ETB - Ethiopian Birr - Nkf</option>
                                                    <option data-currency="eu">EUR - Euro - €</option>
                                                    <option data-currency="fk">FKP - Falkland Islands Pound - £</option>
                                                    <option data-currency="fj">FJD - Fijian Dollar - FJ$</option>
                                                    <option data-currency="gm">GMD - Gambian Dalasi - D</option>
                                                    <option data-currency="ge">GEL - Georgian Lari - ლ</option>
                                                    <option data-currency="de">DEM - German Mark - DM</option>
                                                    <option data-currency="gh">GHS - Ghanaian Cedi - GH₵</option>
                                                    <option data-currency="gi">GIP - Gibraltar Pound - £</option>
                                                    <option data-currency="gr">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
                                                    <option data-currency="gt">GTQ - Guatemalan Quetzal - Q</option>
                                                    <option data-currency="gn">GNF - Guinean Franc - FG</option>
                                                    <option data-currency="gy">GYD - Guyanaese Dollar - $</option>
                                                    <option data-currency="ht">HTG - Haitian Gourde - G</option>
                                                    <option data-currency="hn">HNL - Honduran Lempira - L</option>
                                                    <option data-currency="hk">HKD - Hong Kong Dollar - $</option>
                                                    <option data-currency="hu">HUF - Hungarian Forint - Ft</option>
                                                    <option data-currency="is">ISK - Icelandic KrÃ³na - kr</option>
                                                    <option data-currency="in">INR - Indian Rupee - ₹</option>
                                                    <option data-currency="id">IDR - Indonesian Rupiah - Rp</option>
                                                    <option data-currency="ir">IRR - Iranian Rial - ﷼</option>
                                                    <option data-currency="iq">IQD - Iraqi Dinar - د.ع</option>
                                                    <option data-currency="il">ILS - Israeli New Sheqel - ₪</option>
                                                    <option data-currency="it">ITL - Italian Lira - L,£</option>
                                                    <option data-currency="jm">JMD - Jamaican Dollar - J$</option>
                                                    <option data-currency="jp">JPY - Japanese Yen - ¥</option>
                                                    <option data-currency="jo">JOD - Jordanian Dinar - ا.د</option>
                                                    <option data-currency="kz">KZT - Kazakhstani Tenge - лв</option>
                                                    <option data-currency="ke">KES - Kenyan Shilling - KSh</option>
                                                    <option data-currency="kw">KWD - Kuwaiti Dinar - ك.د</option>
                                                    <option data-currency="kg">KGS - Kyrgystani Som - лв</option>
                                                    <option data-currency="la">LAK - Laotian Kip - ₭</option>
                                                    <option data-currency="lv">LVL - Latvian Lats - Ls</option>
                                                    <option data-currency="lb">LBP - Lebanese Pound - £</option>
                                                    <option data-currency="ls">LSL - Lesotho Loti - L</option>
                                                    <option data-currency="lr">LRD - Liberian Dollar - $</option>
                                                    <option data-currency="ly">LYD - Libyan Dinar - د.ل</option>
                                                    <option data-currency="lt">LTL - Lithuanian Litas - Lt</option>
                                                    <option data-currency="mo">MOP - Macanese Pataca - $</option>
                                                    <option data-currency="mk">MKD - Macedonian Denar - ден</option>
                                                    <option data-currency="mg">MGA - Malagasy Ariary - Ar</option>
                                                    <option data-currency="mw">MWK - Malawian Kwacha - MK</option>
                                                    <option data-currency="my">MYR - Malaysian Ringgit - RM</option>
                                                    <option data-currency="mv">MVR - Maldivian Rufiyaa - Rf</option>
                                                    <option data-currency="mr">MRO - Mauritanian Ouguiya - MRU</option>
                                                    <option data-currency="mu">MUR - Mauritian Rupee - ₨</option>
                                                    <option data-currency="mx">MXN - Mexican Peso - $</option>
                                                    <option data-currency="md">MDL - Moldovan Leu - L</option>
                                                    <option data-currency="mn">MNT - Mongolian Tugrik - ₮</option>
                                                    <option data-currency="ma">MAD - Moroccan Dirham - MAD</option>
                                                    <option data-currency="mz">MZM - Mozambican Metical - MT</option>
                                                    <option data-currency="mm">MMK - Myanmar Kyat - K</option>
                                                    <option data-currency="na">NAD - Namibian Dollar - $</option>
                                                    <option data-currency="np">NPR - Nepalese Rupee - ₨</option>
                                                    <option data-currency="nl">ANG - Netherlands Antillean Guilder - ƒ</option>
                                                    <option data-currency="tw">TWD - New Taiwan Dollar - $</option>
                                                    <option data-currency="nz">NZD - New Zealand Dollar - $</option>
                                                    <option data-currency="ni">NIO - Nicaraguan CÃ³rdoba - C$</option>
                                                    <option data-currency="ng">NGN - Nigerian Naira - ₦</option>
                                                    <option data-currency="kp">KPW - North Korean Won - ₩</option>
                                                    <option data-currency="no">NOK - Norwegian Krone - kr</option>
                                                    <option data-currency="om">OMR - Omani Rial - .ع.ر</option>
                                                    <option data-currency="pk">PKR - Pakistani Rupee - ₨</option>
                                                    <option data-currency="pa">PAB - Panamanian Balboa - B/.</option>
                                                    <option data-currency="pg">PGK - Papua New Guinean Kina - K</option>
                                                    <option data-currency="py">PYG - Paraguayan Guarani - ₲</option>
                                                    <option data-currency="pe">PEN - Peruvian Nuevo Sol - S/.</option>
                                                    <option data-currency="ph">PHP - Philippine Peso - ₱</option>
                                                    <option data-currency="pl">PLN - Polish Zloty - zł</option>
                                                    <option data-currency="qa">QAR - Qatari Rial - ق.ر</option>
                                                    <option data-currency="ro">RON - Romanian Leu - lei</option>
                                                    <option data-currency="ru">RUB - Russian Ruble - ₽</option>
                                                    <option data-currency="rw">RWF - Rwandan Franc - FRw</option>
                                                    <option data-currency="sv">SVC - Salvadoran ColÃ³n - ₡</option>
                                                    <option data-currency="ws">WST - Samoan Tala - SAT</option>
                                                    <option data-currency="sa">SAR - Saudi Riyal - ﷼</option>
                                                    <option data-currency="sr">RSD - Serbian Dinar - din</option>
                                                    <option data-currency="sc">SCR - Seychellois Rupee - SRe</option>
                                                    <option data-currency="sl">SLL - Sierra Leonean Leone - Le</option>
                                                    <option data-currency="sg">SGD - Singapore Dollar - $</option>
                                                    <option data-currency="sk">SKK - Slovak Koruna - Sk</option>
                                                    <option data-currency="sb">SBD - Solomon Islands Dollar - Si$</option>
                                                    <option data-currency="so">SOS - Somali Shilling - Sh.so.</option>
                                                    <option data-currency="za">ZAR - South African Rand - R</option>
                                                    <option data-currency="kr">KRW - South Korean Won - ₩</option>
                                                    <option data-currency="lk">LKR - Sri Lankan Rupee - Rs</option>
                                                    <option data-currency="sh">SHP - St. Helena Pound - £</option>
                                                    <option data-currency="sd">SDG - Sudanese Pound - .س.ج</option>
                                                    <option data-currency="sr">SRD - Surinamese Dollar - $</option>
                                                    <option data-currency="sz">SZL - Swazi Lilangeni - E</option>
                                                    <option data-currency="se">SEK - Swedish Krona - kr</option>
                                                    <option data-currency="ch">CHF - Swiss Franc - CHf</option>
                                                    <option data-currency="sy">SYP - Syrian Pound - LS</option>
                                                    <option data-currency="st">STD - São Tomé and Príncipe Dobra - Db</option>
                                                    <option data-currency="tj">TJS - Tajikistani Somoni - SM</option>
                                                    <option data-currency="tz">TZS - Tanzanian Shilling - TSh</option>
                                                    <option data-currency="th">THB - Thai Baht - ฿</option>
                                                    <option data-currency="to">TOP - Tongan pa'anga - $</option>
                                                    <option data-currency="tt">TTD - Trinidad &amp; Tobago Dollar - $</option>
                                                    <option data-currency="tn">TND - Tunisian Dinar - ت.د</option>
                                                    <option data-currency="tr">TRY - Turkish Lira - ₺</option>
                                                    <option data-currency="tm">TMT - Turkmenistani Manat - T</option>
                                                    <option data-currency="ug">UGX - Ugandan Shilling - USh</option>
                                                    <option data-currency="ua">UAH - Ukrainian Hryvnia - ₴</option>
                                                    <option data-currency="ae">AED - United Arab Emirates Dirham - إ.د</option>
                                                    <option data-currency="uy">UYU - Uruguayan Peso - $</option>
                                                    <option data-currency="us" selected="" data-select2-id="select2-data-89-1ja0">USD - US Dollar - $</option>
                                                    <option data-currency="uz">UZS - Uzbekistan Som - лв</option>
                                                    <option data-currency="vu">VUV - Vanuatu Vatu - VT</option>
                                                    <option data-currency="ve">VEF - Venezuelan BolÃ­var - Bs</option>
                                                    <option data-currency="vn">VND - Vietnamese Dong - ₫</option>
                                                    <option data-currency="ye">YER - Yemeni Rial - ﷼</option>
                                                    <option data-currency="zm">ZMK - Zambian Kwacha - ZK</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-88-pddp" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-96wg-container" aria-controls="select2-96wg-container"><span class="select2-selection__rendered" id="select2-96wg-container" role="textbox" aria-readonly="true" title="USD - US Dollar - $"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/1x1/us.svg" class="avatar-image avatar-sm"> USD - US Dollar - $</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="Input" class="fw-semibold">Group: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-select form-control max-select select2-hidden-accessible" data-select2-selector="tag" multiple="" data-select2-id="select2-data-40-zc5e" tabindex="-1" aria-hidden="true">
                                                    <option value="success" data-bg="bg-success">VIP</option>
                                                    <option value="info" data-bg="bg-info">Bugs</option>
                                                    <option value="primary" data-bg="bg-primary">Team</option>
                                                    <option value="teal" data-bg="bg-teal">Primary</option>
                                                    <option value="success" data-bg="bg-success">Updates</option>
                                                    <option value="warning" data-bg="bg-warning">Personal</option>
                                                    <option value="danger" data-bg="bg-danger" selected="" data-select2-id="select2-data-42-0rtd">Promotions</option>
                                                    <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                    <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                    <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                    <option value="teal" data-bg="bg-teal" selected="" data-select2-id="select2-data-43-ifj0">High Budget</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-41-30u3" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-8l8e-container"><li class="select2-selection__choice" title="Promotions" data-select2-id="select2-data-44-xm5l"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-8l8e-container-choice-mjof-danger"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-8l8e-container-choice-mjof-danger"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-danger"></span> Promotions</span></span></li><li class="select2-selection__choice" title="High Budget" data-select2-id="select2-data-45-9eaz"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-8l8e-container-choice-wkjw-teal"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-8l8e-container-choice-wkjw-teal"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> High Budget</span></span></li></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-8l8e-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Status: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="status" data-select2-id="select2-data-46-aasp" tabindex="-1" aria-hidden="true">
                                                    <option value="success" data-bg="bg-success" selected="" data-select2-id="select2-data-48-moaz">Active</option>
                                                    <option value="warning" data-bg="bg-warning">Inactive</option>
                                                    <option value="danger" data-bg="bg-danger">Declined</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-47-v8m9" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-d91k-container" aria-controls="select2-d91k-container"><span class="select2-selection__rendered" id="select2-d91k-container" role="textbox" aria-readonly="true" title="Active"><span class="hstack gap-2"> <span class="wd-7 ht-7 rounded-circle bg-success"></span> Active</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-0 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Privacy: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="privacy" data-select2-id="select2-data-1-7wr6" tabindex="-1" aria-hidden="true">
                                                    <option value="onlyme" data-icon="feather-lock">Only Me</option>
                                                    <option value="everyone" data-icon="feather-globe" selected="" data-select2-id="select2-data-3-3co2">Everyone</option>
                                                    <option value="anonymous" data-icon="feather-users">Anonymous</option>
                                                    <option value="ifollow" data-icon="feather-user-check">People I Follow</option>
                                                    <option value="followme" data-icon="feather-eye">People Follow Me</option>
                                                    <option value="customselectever" data-icon="feather-settings">Custom Select Ever</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-2-2pwt" style="width: 751.725px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-upog-container" aria-controls="select2-upog-container"><span class="select2-selection__rendered" id="select2-upog-container" role="textbox" aria-readonly="true" title="Everyone"><span class="hstack gap-3"><i class=" feather-globe"></i> Everyone</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="passwordTab" role="tabpanel">
                                    <div class="card-body pass-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Password Information:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">You can only change your password twice within 24 hours! </span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Reset</a>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="Input" class="fw-semibold">Password: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-key"></i></div>
                                                    <input type="password" class="form-control" id="Input" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="Input" class="fw-semibold">Password Confirm: </label>
                                            </div>
                                            <div class="col-lg-8 generate-pass">
                                                <div class="input-group field">
                                                    <div class="input-group-text"><i class="feather-key"></i></div>
                                                    <input type="password" class="form-control password" id="newPassword" placeholder="Password Confirm">
                                                    <div class="input-group-text c-pointer gen-pass"><i class="feather-hash"></i></div>
                                                    <div class="input-group-text border-start bg-gray-2 c-pointer show-pass"><i></i></div>
                                                </div>
                                                <div class="progress-bar mt-2">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pass-hint">
                                            <p class="fw-bold">Password Requirements:</p>
                                            <ul class="fs-12 ps-1 ms-2 text-muted">
                                                <li class="mb-1">At least one lowercase character</li>
                                                <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                                                <li>At least one number, symbol, or whitespace character</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body pass-security">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Security preferences:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Keep your account more secure with following preferences. </span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Check Auth</a>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="avatar-text">
                                                    <i class="feather-eye"></i>
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Enable 2-step authentication</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Protects you against password theft by requesting an authentication code via SMS on every login.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitch2FA"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitch2FA">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="avatar-text">
                                                    <i class="feather-shield"></i>
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Ask to change password on every 6 months</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">A simple but an effective way to be protected against data leaks and password theft.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchPassChange"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchPassChange">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="billingTab" role="tabpanel">
                                    <div class="card-body pass-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Billing Address:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">A billing address is the address associated with a payment method.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Same as Customer Info</a>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="addressInput_1" class="fw-semibold">Address: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-map-pin"></i></div>
                                                    <textarea class="form-control" id="addressInput_1" cols="30" rows="3" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="zipCodeInput" class="fw-semibold">Zip Code: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-tag"></i></div>
                                                    <input type="number" class="form-control" id="zipCodeInput" placeholder="Zip Code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Country: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="country" data-select2-id="select2-data-52-njre" tabindex="-1" aria-hidden="true">
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
                                                    <option data-country="us" selected="" data-select2-id="select2-data-54-am5x">United States</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-53-x2mi" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-am14-container" aria-controls="select2-am14-container"><span class="select2-selection__rendered" id="select2-am14-container" role="textbox" aria-readonly="true" title="United States"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/1x1/us.svg" class="avatar-image avatar-sm"> United States</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">State: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="state" data-select2-id="select2-data-64-9ol5" tabindex="-1" aria-hidden="true">
                                                    <option data-state="al">Alabama</option>
                                                    <option data-state="ak" selected="" data-select2-id="select2-data-66-ihvs">Alaska</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-65-ms6x" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-p3xl-container" aria-controls="select2-p3xl-container"><span class="select2-selection__rendered" id="select2-p3xl-container" role="textbox" aria-readonly="true" title="Alaska"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/us/ak.png" class="avatar-image avatar-sm"> Alaska</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">City: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="city" data-select2-id="select2-data-73-7bkk" tabindex="-1" aria-hidden="true">
                                                    <option data-city="bg-primary">Akutan</option>
                                                    <option data-city="bg-secondary">Aleutians East Borough</option>
                                                    <option data-city="bg-success">Aleutians West Census Area</option>
                                                    <option data-city="bg-warning">Anchor Point</option>
                                                    <option data-city="bg-info">Anchorage</option>
                                                    <option data-city="bg-danger">Anchorage Municipality</option>
                                                    <option data-city="bg-dark">Badger</option>
                                                    <option data-city="bg-black">Barrow</option>
                                                    <option data-city="bg-muted">Bear Creek</option>
                                                    <option data-city="bg-blue">Bethel</option>
                                                    <option data-city="bg-teal">Bethel Census Area</option>
                                                    <option data-city="bg-cyan">Big Lake</option>
                                                    <option data-city="bg-indigo">Bristol Bay Borough</option>
                                                    <option data-city="bg-green">Butte</option>
                                                    <option data-city="bg-red">Chevak</option>
                                                    <option data-city="bg-orange">City and Borough of Wrangell</option>
                                                    <option data-city="bg-darken">Cohoe</option>
                                                    <option data-city="bg-primary">College</option>
                                                    <option data-city="bg-warning">Cordova</option>
                                                    <option data-city="bg-danger">Craig</option>
                                                    <option data-city="bg-red">Deltana</option>
                                                    <option data-city="bg-green">Denali Borough</option>
                                                    <option data-city="bg-orange">Diamond Ridge</option>
                                                    <option data-city="bg-muted">Dillingham</option>
                                                    <option data-city="bg-teal">Dillingham Census Area</option>
                                                    <option data-city="bg-info">Dutch Harbor</option>
                                                    <option data-city="bg-indigo">Eagle River</option>
                                                    <option data-city="bg-cyan">Eielson Air Force Base</option>
                                                    <option data-city="bg-orange">Elmendorf Air Force Base</option>
                                                    <option data-city="bg-black">Ester</option>
                                                    <option data-city="bg-warning">Fairbanks</option>
                                                    <option data-city="bg-green">Fairbanks North Star Borough</option>
                                                    <option data-city="bg-indigo">Farm Loop</option>
                                                    <option data-city="bg-danger">Farmers Loop</option>
                                                    <option data-city="bg-success">Fishhook</option>
                                                    <option data-city="bg-teal">Fritz Creek</option>
                                                    <option data-city="bg-cyan">Gateway</option>
                                                    <option data-city="bg-black">Girdwood</option>
                                                    <option data-city="bg-warning">Haines</option>
                                                    <option data-city="bg-green">Haines Borough</option>
                                                    <option data-city="bg-indigo">Healy</option>
                                                    <option data-city="bg-danger">Homer</option>
                                                    <option data-city="bg-success">Hoonah-Angoon Census Area</option>
                                                    <option data-city="bg-teal">Hooper Bay</option>
                                                    <option data-city="bg-cyan">Houston</option>
                                                    <option data-city="bg-warning">Juneau</option>
                                                    <option data-city="bg-black">Kalifornsky</option>
                                                    <option data-city="bg-green">Kenai</option>
                                                    <option data-city="bg-danger">Kenai Peninsula Borough</option>
                                                    <option data-city="bg-success">Ketchikan</option>
                                                    <option data-city="bg-indigo">Ketchikan Gateway Borough</option>
                                                    <option data-city="bg-teal" selected="" data-select2-id="select2-data-75-ekoe">King Cove</option>
                                                    <option data-city="bg-black">Knik-Fairview</option>
                                                    <option data-city="bg-green">Kodiak</option>
                                                    <option data-city="bg-cyan">Kodiak Island Borough</option>
                                                    <option data-city="bg-warning">Kodiak Station</option>
                                                    <option data-city="bg-darken">Kotzebue</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-74-zin2" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-npg7-container" aria-controls="select2-npg7-container"><span class="select2-selection__rendered" id="select2-npg7-container" role="textbox" aria-readonly="true" title="King Cove"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> King Cove</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body pass-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Shipping Address:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">A shipping address is the address to which a purchased item or service is to be delivered.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Copy Billing Address</a>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="addressInput_3" class="fw-semibold">Address: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-map-pin"></i></div>
                                                    <textarea class="form-control" id="addressInput_3" cols="30" rows="3" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="zipCodeInput_1" class="fw-semibold">Zip Code: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-tag"></i></div>
                                                    <input type="number" class="form-control" id="zipCodeInput_1" placeholder="Zip Code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Country: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="country" data-select2-id="select2-data-55-fp1s" tabindex="-1" aria-hidden="true">
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
                                                    <option data-country="us" selected="" data-select2-id="select2-data-57-6a78">United States</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-56-254t" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bk2r-container" aria-controls="select2-bk2r-container"><span class="select2-selection__rendered" id="select2-bk2r-container" role="textbox" aria-readonly="true" title="United States"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/1x1/us.svg" class="avatar-image avatar-sm"> United States</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">State: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="state" data-select2-id="select2-data-67-u8j9" tabindex="-1" aria-hidden="true">
                                                    <option data-state="al">Alabama</option>
                                                    <option data-state="ak" selected="" data-select2-id="select2-data-69-hb17">Alaska</option>
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
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-68-ob9l" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0d4j-container" aria-controls="select2-0d4j-container"><span class="select2-selection__rendered" id="select2-0d4j-container" role="textbox" aria-readonly="true" title="Alaska"><span class="hstack gap-3"> <img src="./../assets/vendors/img/flags/us/ak.png" class="avatar-image avatar-sm"> Alaska</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">City: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2-hidden-accessible" data-select2-selector="city" data-select2-id="select2-data-76-3g3n" tabindex="-1" aria-hidden="true">
                                                    <option data-city="bg-primary">Akutan</option>
                                                    <option data-city="bg-secondary">Aleutians East Borough</option>
                                                    <option data-city="bg-success">Aleutians West Census Area</option>
                                                    <option data-city="bg-warning">Anchor Point</option>
                                                    <option data-city="bg-info">Anchorage</option>
                                                    <option data-city="bg-danger">Anchorage Municipality</option>
                                                    <option data-city="bg-dark">Badger</option>
                                                    <option data-city="bg-black">Barrow</option>
                                                    <option data-city="bg-muted">Bear Creek</option>
                                                    <option data-city="bg-blue">Bethel</option>
                                                    <option data-city="bg-teal">Bethel Census Area</option>
                                                    <option data-city="bg-cyan">Big Lake</option>
                                                    <option data-city="bg-indigo">Bristol Bay Borough</option>
                                                    <option data-city="bg-green">Butte</option>
                                                    <option data-city="bg-red">Chevak</option>
                                                    <option data-city="bg-orange">City and Borough of Wrangell</option>
                                                    <option data-city="bg-darken">Cohoe</option>
                                                    <option data-city="bg-primary">College</option>
                                                    <option data-city="bg-warning">Cordova</option>
                                                    <option data-city="bg-danger">Craig</option>
                                                    <option data-city="bg-red">Deltana</option>
                                                    <option data-city="bg-green">Denali Borough</option>
                                                    <option data-city="bg-orange">Diamond Ridge</option>
                                                    <option data-city="bg-muted">Dillingham</option>
                                                    <option data-city="bg-teal">Dillingham Census Area</option>
                                                    <option data-city="bg-info">Dutch Harbor</option>
                                                    <option data-city="bg-indigo">Eagle River</option>
                                                    <option data-city="bg-cyan">Eielson Air Force Base</option>
                                                    <option data-city="bg-orange">Elmendorf Air Force Base</option>
                                                    <option data-city="bg-black">Ester</option>
                                                    <option data-city="bg-warning">Fairbanks</option>
                                                    <option data-city="bg-green">Fairbanks North Star Borough</option>
                                                    <option data-city="bg-indigo">Farm Loop</option>
                                                    <option data-city="bg-danger">Farmers Loop</option>
                                                    <option data-city="bg-success">Fishhook</option>
                                                    <option data-city="bg-teal">Fritz Creek</option>
                                                    <option data-city="bg-cyan">Gateway</option>
                                                    <option data-city="bg-black">Girdwood</option>
                                                    <option data-city="bg-warning">Haines</option>
                                                    <option data-city="bg-green">Haines Borough</option>
                                                    <option data-city="bg-indigo">Healy</option>
                                                    <option data-city="bg-danger">Homer</option>
                                                    <option data-city="bg-success">Hoonah-Angoon Census Area</option>
                                                    <option data-city="bg-teal">Hooper Bay</option>
                                                    <option data-city="bg-cyan">Houston</option>
                                                    <option data-city="bg-warning">Juneau</option>
                                                    <option data-city="bg-black">Kalifornsky</option>
                                                    <option data-city="bg-green">Kenai</option>
                                                    <option data-city="bg-danger">Kenai Peninsula Borough</option>
                                                    <option data-city="bg-success">Ketchikan</option>
                                                    <option data-city="bg-indigo">Ketchikan Gateway Borough</option>
                                                    <option data-city="bg-teal" selected="" data-select2-id="select2-data-78-ey22">King Cove</option>
                                                    <option data-city="bg-black">Knik-Fairview</option>
                                                    <option data-city="bg-green">Kodiak</option>
                                                    <option data-city="bg-cyan">Kodiak Island Borough</option>
                                                    <option data-city="bg-warning">Kodiak Station</option>
                                                    <option data-city="bg-darken">Kotzebue</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-77-fba7" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dyvv-container" aria-controls="select2-dyvv-container"><span class="select2-selection__rendered" id="select2-dyvv-container" role="textbox" aria-readonly="true" title="King Cove"><span class="hstack gap-3"> <span class="wd-7 ht-7 rounded-circle bg-teal"></span> King Cove</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="subscriptionTab" role="tabpanel">
                                    <div class="alert alert-dismissible m-4 p-4 d-flex alert-soft-teal-message" role="alert">
                                        <div class="me-4 d-none d-md-block">
                                            <i class="feather feather-alert-octagon fs-1"></i>
                                        </div>
                                        <div>
                                            <p class="fw-bold mb-1 text-truncate-1-line">We need your attention!</p>
                                            <p class="fs-12 fw-medium text-truncate-1-line">Your payment was declined. To start using tools, please <strong>Add Payment Method</strong></p>
                                            <a href="javascript:void(0);" class="btn btn-sm bg-soft-teal text-teal d-inline-block">Add Payment Method</a>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="card-body choose-plan">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0">Subscription &amp; Plan:</h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">4 days remaining</a>
                                        </div>
                                        <div class="p-4 mb-4 d-xxl-flex d-xl-block d-md-flex align-items-center justify-content-between gap-4 border border-dashed border-gray-5 rounded-1">
                                            <div>
                                                <div class="fs-14 fw-bold text-dark mb-1">Your current plan is <a href="javascript:void(0);" class="badge bg-primary text-white ms-2">Team Plan</a></div>
                                                <div class="fs-12 text-muted">A simple start for everyone</div>
                                            </div>
                                            <div class="my-3 my-xxl-0 my-md-3 my-md-0">
                                                <div class="fs-20 text-dark"><span class="fw-bold">$29.99</span> / <em class="fs-11 fw-medium">Month</em></div>
                                                <div class="fs-12 text-muted mt-1">Billed Monthly / Next payment on 12/10/2023 for <strong class="text-dark">$62.48</strong></div>
                                            </div>
                                            <div class="hstack gap-3">
                                                <a href="javascript:void(0);" class="text-danger">Cancel Plan</a>
                                                <a href="javascript:void(0);" class="btn btn-light-brand">Update Plan</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="javascript:void(0);" class="p-4 mb-4 d-block bg-soft-100 border border-dashed border-gray-5 rounded-1">
                                                    <h6 class="fs-13 fw-bold">BASIC</h6>
                                                    <p class="fs-12 fw-normal text-muted">Starter plan for individuals.</p>
                                                    <p class="fs-12 fw-normal text-muted text-truncate-2-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa id corrupti modi, impedit exercitationem harum voluptates reiciendis.</p>
                                                    <div class="mt-4"><span class="fs-16 fw-bold text-dark">$12.99</span> / <em class="fs-11 fw-medium">Month</em></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:void(0);" class="p-4 mb-4 d-block bg-soft-200 border border-dashed border-gray-5 rounded-1 position-relative">
                                                    <h6 class="fs-13 fw-bold">TEAM</h6>
                                                    <p class="fs-12 fw-normal text-muted">Collaborate up to 10 people.</p>
                                                    <p class="fs-12 fw-normal text-muted text-truncate-2-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa id corrupti modi, impedit exercitationem harum voluptates reiciendis.</p>
                                                    <div class="mt-4"><span class="fs-16 fw-bold text-dark">$29.99</span> / <em class="fs-11 fw-medium">Month</em></div>
                                                    <div class="position-absolute top-0 start-50 translate-middle">
                                                        <i class="feather-check fs-12 bg-primary text-white p-1 rounded-circle"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:void(0);" class="p-4 mb-4 d-block bg-soft-100 border border-dashed border-gray-5 rounded-1">
                                                    <h6 class="fs-13 fw-bold">ENTERPRISE</h6>
                                                    <p class="fs-12 fw-normal text-muted">For bigger businesses.</p>
                                                    <p class="fs-12 fw-normal text-muted text-truncate-2-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa id corrupti modi, impedit exercitationem harum voluptates reiciendis.</p>
                                                    <div class="mt-4"><span class="fs-16 fw-bold text-dark">$49.99</span> / <em class="fs-11 fw-medium">Month</em></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body payment-methord">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0">Payment Methords:</h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Add Methord</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="px-4 py-2 mb-4 d-sm-flex justify-content-between border border-dashed border-gray-3 rounded-1 position-relative">
                                                    <div class="d-sm-flex align-items-center">
                                                        <div class="wd-100">
                                                            <img src="assets/images/payment/mastercard.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="ms-0 ms-sm-3">
                                                            <div class="text-dark fw-bold mb-2">Alexandra Della</div>
                                                            <div class="mb-0 text-truncate-1-line">5155 **** **** ****</div>
                                                            <small class="fs-10 fw-medium text-uppercase text-muted text-truncate-1-line">Card expires at 12/24</small>
                                                        </div>
                                                    </div>
                                                    <div class="hstack gap-3 mt-3 mt-sm-0">
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Edit</a>
                                                    </div>
                                                    <div class="position-absolute top-50 start-0 translate-middle">
                                                        <i class="feather-check fs-12 bg-primary text-white p-1 rounded-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="px-4 py-2 mb-4 d-sm-flex justify-content-between border border-dashed border-gray-3 rounded-1">
                                                    <div class="d-sm-flex align-items-center">
                                                        <div class="wd-100">
                                                            <img src="assets/images/payment/visa.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="ms-0 ms-sm-3">
                                                            <div class="text-dark fw-bold mb-2">Alexandra Della</div>
                                                            <div class="mb-0 text-truncate-1-line">4236 **** **** ****</div>
                                                            <small class="fs-10 fw-medium text-uppercase text-muted text-truncate-1-line">Card expires at 11/23</small>
                                                        </div>
                                                    </div>
                                                    <div class="hstack gap-3 mt-3 mt-sm-0">
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="px-4 py-2 mb-4 d-sm-flex justify-content-between border border-dashed border-gray-3 rounded-1">
                                                    <div class="d-sm-flex align-items-center">
                                                        <div class="wd-100">
                                                            <img src="assets/images/payment/american-express.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="ms-0 ms-sm-3">
                                                            <div class="text-dark fw-bold mb-2">Alexandra Della</div>
                                                            <div class="mb-0 text-truncate-1-line">3437 **** **** ****</div>
                                                            <small class="fs-10 fw-medium text-uppercase text-muted text-truncate-1-line">Card expires at 11/24</small>
                                                        </div>
                                                    </div>
                                                    <div class="hstack gap-3 mt-3 mt-sm-0">
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="px-4 py-2 mb-4 d-sm-flex justify-content-between border border-dashed border-gray-3 rounded-1">
                                                    <div class="d-sm-flex align-items-center">
                                                        <div class="wd-100">
                                                            <img src="assets/images/payment/discover.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="ms-0 ms-sm-3">
                                                            <div class="text-dark fw-bold mb-2">Alexandra Della</div>
                                                            <div class="mb-0 text-truncate-1-line">6011 **** **** ****</div>
                                                            <small class="fs-10 fw-medium text-uppercase text-muted text-truncate-1-line">Card expires at 11/25</small>
                                                        </div>
                                                    </div>
                                                    <div class="hstack gap-3 mt-3 mt-sm-0">
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="notificationsTab" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th class="wd-250 text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Successful payments</div>
                                                        <small class="fs-12 text-muted">Receive a notification for every successful payment.</small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-4-wdoi" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail" selected="" data-select2-id="select2-data-6-ivqs">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-5-kofs" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-2qui-container" aria-controls="select2-2qui-container"><span class="select2-selection__rendered" id="select2-2qui-container" role="textbox" aria-readonly="true" title="Email"><span class="hstack gap-3"><i class=" feather-mail"></i> Email</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Customer payment dispute</div>
                                                        <small class="fs-12 text-muted">Receive a notification if a payment is disputed by a customer and for dispute purposes. </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-7-g43w" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off" selected="" data-select2-id="select2-data-9-4t0a">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-8-93k7" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-t04e-container" aria-controls="select2-t04e-container"><span class="select2-selection__rendered" id="select2-t04e-container" role="textbox" aria-readonly="true" title="Deactivate"><span class="hstack gap-3"><i class=" feather-bell-off"></i> Deactivate</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Refund alerts</div>
                                                        <small class="fs-12 text-muted">Receive a notification if a payment is stated as risk by the Finance Department. </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-10-ekpn" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell" selected="" data-select2-id="select2-data-12-com6">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-11-0qdt" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0ctt-container" aria-controls="select2-0ctt-container"><span class="select2-selection__rendered" id="select2-0ctt-container" role="textbox" aria-readonly="true" title="Push"><span class="hstack gap-3"><i class=" feather-bell"></i> Push</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Invoice payments</div>
                                                        <small class="fs-12 text-muted">Receive a notification if a customer sends an incorrect amount to pay their invoice. </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-13-bgkc" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail" selected="" data-select2-id="select2-data-15-gm46">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-14-mz1l" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-obzx-container" aria-controls="select2-obzx-container"><span class="select2-selection__rendered" id="select2-obzx-container" role="textbox" aria-readonly="true" title="Email"><span class="hstack gap-3"><i class=" feather-mail"></i> Email</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Rating reminders</div>
                                                        <small class="fs-12 text-muted">Send an email reminding me to rate an item a week after purchase </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-16-holp" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off" selected="" data-select2-id="select2-data-18-vsue">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-17-cqa7" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-d6be-container" aria-controls="select2-d6be-container"><span class="select2-selection__rendered" id="select2-d6be-container" role="textbox" aria-readonly="true" title="Deactivate"><span class="hstack gap-3"><i class=" feather-bell-off"></i> Deactivate</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Item update notifications</div>
                                                        <small class="fs-12 text-muted">Send an email when an item I've purchased is updated </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-19-7jyb" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone" selected="" data-select2-id="select2-data-21-gluh">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-20-e5mp" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-b4yd-container" aria-controls="select2-b4yd-container"><span class="select2-selection__rendered" id="select2-b4yd-container" role="textbox" aria-readonly="true" title="SMS"><span class="hstack gap-3"><i class=" feather-smartphone"></i> SMS</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Item comment notifications</div>
                                                        <small class="fs-12 text-muted">Send me an email when someone comments on one of my items </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-22-21fe" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell" selected="" data-select2-id="select2-data-24-ywpj">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-23-c03c" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5493-container" aria-controls="select2-5493-container"><span class="select2-selection__rendered" id="select2-5493-container" role="textbox" aria-readonly="true" title="Push"><span class="hstack gap-3"><i class=" feather-bell"></i> Push</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Team comment notifications</div>
                                                        <small class="fs-12 text-muted">Send me an email when someone comments on one of my team items </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-25-9nvn" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat" selected="" data-select2-id="select2-data-27-be2b">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-26-jlvh" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-m9ux-container" aria-controls="select2-m9ux-container"><span class="select2-selection__rendered" id="select2-m9ux-container" role="textbox" aria-readonly="true" title="Repeat"><span class="hstack gap-3"><i class=" feather-repeat"></i> Repeat</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Item review notifications</div>
                                                        <small class="fs-12 text-muted">Send me an email when my items are approved or rejected </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-28-zay2" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off" selected="" data-select2-id="select2-data-30-ujor">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-29-s9jd" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-btfx-container" aria-controls="select2-btfx-container"><span class="select2-selection__rendered" id="select2-btfx-container" role="textbox" aria-readonly="true" title="Deactivate"><span class="hstack gap-3"><i class=" feather-bell-off"></i> Deactivate</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Buyer review notifications</div>
                                                        <small class="fs-12 text-muted">Send me an email when someone leaves a review with their rating </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-31-agth" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off" selected="" data-select2-id="select2-data-33-7r5z">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-32-6tv9" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ou5b-container" aria-controls="select2-ou5b-container"><span class="select2-selection__rendered" id="select2-ou5b-container" role="textbox" aria-readonly="true" title="Deactivate"><span class="hstack gap-3"><i class=" feather-bell-off"></i> Deactivate</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Expiring support notifications</div>
                                                        <small class="fs-12 text-muted">Send me emails showing my soon to expire support entitlements </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-34-0sik" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell">Push</option>
                                                                <option value="Email" data-icon="feather-mail" selected="" data-select2-id="select2-data-36-gxxt">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-35-j10v" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8qsp-container" aria-controls="select2-8qsp-container"><span class="select2-selection__rendered" id="select2-8qsp-container" role="textbox" aria-readonly="true" title="Email"><span class="hstack gap-3"><i class=" feather-mail"></i> Email</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark">Daily summary emails</div>
                                                        <small class="fs-12 text-muted">Send me a daily summary of all items approved or rejected </small>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="form-group select-wd-lg">
                                                            <select class="form-control select2-hidden-accessible" data-select2-selector="icon" data-select2-id="select2-data-37-n3ic" tabindex="-1" aria-hidden="true">
                                                                <option value="SMS" data-icon="feather-smartphone">SMS</option>
                                                                <option value="Push" data-icon="feather-bell" selected="" data-select2-id="select2-data-39-8xp9">Push</option>
                                                                <option value="Email" data-icon="feather-mail">Email</option>
                                                                <option value="Repeat" data-icon="feather-repeat">Repeat</option>
                                                                <option value="Deactivate" data-icon="feather-bell-off">Deactivate</option>
                                                                <option value="SMS+Push" data-icon="feather-smartphone">SMS + Push</option>
                                                                <option value="Email+Push" data-icon="feather-mail">Email + Push</option>
                                                                <option value="SMS+Email" data-icon="feather-smartphone">SMS + Email</option>
                                                                <option value="SMS+Push+Email" data-icon="feather-smartphone">SMS + Push + Email</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-38-wa7d" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fjsj-container" aria-controls="select2-fjsj-container"><span class="select2-selection__rendered" id="select2-fjsj-container" role="textbox" aria-readonly="true" title="Push"><span class="hstack gap-3"><i class=" feather-bell"></i> Push</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body notify-activity-section">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Account Activity:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Lookup you account activity checkup.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View Activity</a>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="avatar-text">
                                                    <i class="feather-message-square"></i>
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Someone comments on one of my items</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">If someone comments on one of your items, it's important to respond in a timely and appropriate manner.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchComment"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchComment">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="avatar-text">
                                                    <i class="feather-briefcase"></i>
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Someone replies to my job posting</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Great! It's always exciting to hear from someone who's interested in a job posting you've put out.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchReplie"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchReplie">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="avatar-text">
                                                    <i class="feather-briefcase"></i>
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Someone mentions or follows me</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">If you received a notification that someone mentioned or followed you, take a moment to read it and understand what it means.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchFollow"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchFollow">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="connectionTab" role="tabpanel">
                                    <div class="card-body development-connections">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Developement Connections:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Developement connections increase speed.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View Connection</a>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/google-drive.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Google Drive: Cloud Storage &amp; File Sharing</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Google's powerful search capabilities are embedded in Drive and offer speed, reliability, and collaboration. And features like Drive search chips help your team ...</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchGDrive"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchGDrive">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/dropbox.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Dropbox: Cloud Storage &amp; File Sharing</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Dropbox brings everything—traditional files, cloud content, and web shortcuts—together in one place. ... Save and access your files from any device, and share ...</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchDropbox"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchDropbox" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/github.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">GitHub: Where the world builds software</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">GitHub is where over 83 million developers shape the future of software, together. Contribute to the open source community, manage your Git repositories, ...</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchGitHub"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchGitHub" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/gitlab.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">GitLab: The One DevOps Platform</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">GitLab helps you automate the builds, integration, and verification of your code. With SAST, DAST, code quality analysis, plus pipelines that enable ...</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchGitLab"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchGitLab">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/shopify.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Shopify: Ecommerce Developers Platform</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Try Shopify free and start a business or grow an existing one. Get more than ecommerce software with tools to manage every part of your business.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchShopify"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchShopify" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/whatsapp.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">WhatsApp: WhatsApp from Facebook is a FREE messaging and video calling app</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Reliable messaging. With WhatsApp, you'll get fast, simple, secure messaging and calling for free*, available on phones all ...</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchWhatsApp"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchWhatsApp">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body social-connections">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Social Connections:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Social connections increase your audience.</span>
                                            </h5>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View Connection</a>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/facebook.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Facebook: The World Most Popular Social Network</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchFacebook"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchFacebook" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/instagram.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Instagram: Edit &amp; Share photos, Videos &amp; Dessages</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Create an account or log in to Instagram - A simple, fun &amp; creative way to capture, edit &amp; share photos, videos &amp; messages with friends &amp; family.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchInstagram"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchInstagram">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/twitter.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Twitter: It's what's happening / Twitter </a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">From breaking news and entertainment to sports and politics, get the full story with all the live commentary.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchTwitter"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchTwitter" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/spotify.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Spotify: Web Player: Music for everyone </a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Spotify is a digital music service that gives you access to millions of songs.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchSpotify"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchSpotify" checked="">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/youtube.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">YouTube: The World Largest Video Sharing Platform</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Enjoy the videos and music you love, upload original content, and share it all with friends, family, and the world on YouTube.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchYouTube"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchYouTube">
                                            </div>
                                        </div>
                                        <div class="hstack justify-content-between p-4 mb-3 border border-dashed border-gray-3 rounded-1">
                                            <div class="hstack me-4">
                                                <div class="wd-40">
                                                    <img src="assets/images/brand/pinterest.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0);" class="fw-bold mb-1 text-truncate-1-line">Pinterest: Discover recipes, home ideas, style inspiration and other ideas to try</a>
                                                    <div class="fs-12 text-muted text-truncate-1-line">Pinterest is an image sharing and social media service designed to enable saving and discovery of information on the internet using images.</div>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-switch-sm">
                                                <label class="form-check-label fw-500 text-dark c-pointer" for="formSwitchPinterest"></label>
                                                <input class="form-check-input c-pointer" type="checkbox" id="formSwitchPinterest" checked="">
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