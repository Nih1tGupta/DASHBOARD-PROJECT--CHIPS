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
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/css/tui-calendar.min.css');}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/css/tui-theme.min.css');}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/css/tui-time-picker.min.css');}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/css/tui-date-picker.min.css');}}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.min.css');}}">

@endsection



@section('content')

        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-xl ps ps--active-y" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Calendar</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" id="btn-new-schedule" class="btn btn-primary w-100" data-toggle="modal">
                            <i class="feather-calendar me-2"></i>
                            <span>New Event</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <div id="lnb-calendars" class="lnb-calendars">
                            <div class="lnb-calendars-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="viewAllSchedules" value="all" checked="checked">
                                    <label class="custom-control-label c-pointer" for="viewAllSchedules">
                                        <span class="fs-13 fw-semibold lh-lg" style="margin-top: -2px">View All Schedules</span>
                                    </label>
                                </div>
                            </div>
                            <div id="calendarList" class="lnb-calendars-d1"><div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="1" checked=""><span style="border-color: #5485e4; background-color: #5485e4;"></span><span>Office</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="2" checked=""><span style="border-color: #25b865; background-color: #25b865;"></span><span>Family</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="3" checked=""><span style="border-color: #d13b4c; background-color: #d13b4c;"></span><span>Friend</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="4" checked=""><span style="border-color: #17a2b8; background-color: #17a2b8;"></span><span>Travel</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="5" checked=""><span style="border-color: #e49e3d; background-color: #e49e3d;"></span><span>Privete</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="6" checked=""><span style="border-color: #5856d6; background-color: #5856d6;"></span><span>Holidays</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="7" checked=""><span style="border-color: #3dc7be; background-color: #3dc7be;"></span><span>Company</span></label></div>
<div class="lnb-calendars-item"><label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="8" checked=""><span style="border-color: #475e77; background-color: #475e77;"></span><span>Birthdays</span></label></div></div>
                        </div>
                        <h2 class="px-4 fs-10 fw-bold text-uppercase my-4 text-muted text-spacing-1 text-truncate-1-line">Events &amp; Schedules</h2>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Company Standup Meeting</h6>
                                        <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">30</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Web Design Presentation</h6>
                                        <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">21</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Standup Design Presentation</h6>
                                        <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">14</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Company Start Concept</h6>
                                        <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 528px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 197px;"></div></div></div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area ps ps--active-y" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div id="menu" class="d-flex align-items-center justify-content-between">
                                <div class="d-flex calendar-action-btn">
                                    <div class="dropdown me-1">
                                        <button id="dropdownMenu-calendarType" class="dropdown-toggle calendar-dropdown-btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-offset="0,17">
                                            <i id="calendarTypeIcon" class="calendar-icon feather feather-grid fs-12 me-1"></i>
                                            <span id="calendarTypeName">Monthly</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-daily">
                                                    <i class="feather-list calendar-icon me-3"></i>
                                                    <span>Daily</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weekly">
                                                    <i class="feather-umbrella calendar-icon me-3"></i>
                                                    <span>Weekly</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weeks2">
                                                    <i class="feather-sliders calendar-icon me-3"></i>
                                                    <span>Weeks (2)</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                                    <i class="feather-framer calendar-icon me-3"></i>
                                                    <span>Weeks (3)</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-monthly">
                                                    <i class="feather-grid calendar-icon me-3"></i>
                                                    <span>Monthly</span>
                                                </div>
                                            </li>
                                            <li role="presentation" class="dropdown-divider"></li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-workweek">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewWeekendsSchedules" value="toggle-workweek" checked="checked">
                                                        <label class="custom-control-label c-pointer" for="viewWeekendsSchedules">
                                                            <span class="fs-12 fw-bold">Show Weekends</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-start-day-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewStartSchedules" value="toggle-start-day-1">
                                                        <label class="custom-control-label c-pointer" for="viewStartSchedules">
                                                            <span class="fs-12 fw-bold">Start Week on Monday</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-narrow-weekend">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewNarrowerSchedules" value="toggle-narrow-weekend">
                                                        <label class="custom-control-label c-pointer" for="viewNarrowerSchedules">
                                                            <span class="fs-12 fw-bold">Narrower than weekdays</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-navi d-none d-sm-flex">
                                        <button type="button" class="move-today" data-action="move-today">
                                            <i class="feather-clock calendar-icon me-1 fs-12" data-action="move-today"></i>
                                            <span>Today</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div id="renderRange" class="render-range d-none d-sm-flex">31.05.24</div>
                                <div class="btn-group gap-1 menu-navi" role="group">
                                    <button type="button" class="avatar-text avatar-md move-day" data-action="move-prev">
                                        <i class="feather-chevron-left fs-12" data-action="move-prev"></i>
                                    </button>
                                    <button type="button" class="avatar-text avatar-md move-day" data-action="move-next">
                                        <i class="feather-chevron-right fs-12" data-action="move-next"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body p-0">
                        <div id="tui-calendar-init"><div class="tui-full-calendar-layout tui-view-1 tui-view-9 tui-view-14 tui-view-17" style="background-color: white;"><div class="tui-full-calendar-month tui-view-4 tui-view-5 tui-full-calendar-vlayout-container"><div class="tui-view-7" data-panel-index="0" style="height: 31px;"><div class="tui-full-calendar-month-dayname" style="border-top: 1px solid #ebebf3; height: 31px; font-size: 12px; background-color: inherit; text-align: left; font-weight: normal;">
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 0%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="tui-full-calendar-holiday-sun" style="color: #d13b4c;">
            Sun
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 14.285714285714286%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="" style="color: #475e77;">
            Mon
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 28.571428571428573%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="" style="color: #475e77;">
            Tue
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 42.85714285714286%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="" style="color: #475e77;">
            Wed
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 57.142857142857146%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="" style="color: #475e77;">
            Thu
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 71.42857142857143%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                border-right: none;
                ">
        <span class="" style="color: #475e77;">
            Fri
        </span>
    </div>
    <div class="tui-full-calendar-month-dayname-item" style="position: absolute;
                width: 14.285714285714286%;
                left: 85.71428571428572%;
                padding-left: 10px;
                padding-right: 0;
                line-height: 31px;
                ">
        <span class="tui-full-calendar-holiday-sat" style="color: #475e77;">
            Sat
        </span>
    </div>
</div>
</div><div class="tui-view-8" data-panel-index="1" data-auto-height="true" style="height: 828px;"><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-45"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(255, 64, 64, 0.4);"><span class="tui-full-calendar-weekday-grid-date">28</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(255, 64, 64, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">29</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">30</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">1</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">2</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">3</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">4</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules">


<div data-id="44" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-44
            
            " style="top:34px;left:42.85714285714286%;width:42.85714285714286%;height:0px;
                margin-top:2px">
        <div data-schedule-id="023f7456-e6c7-550a-b057-fb5fa04ecc9a" data-calendar-id="8" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#475e77; background-color:#475e77; border-color:#475e77;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Voretli mot kun." title="Voretli mot kun."><span class="calendar-font-icon ic-user-b"></span> Voretli mot kun.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>


<div data-id="30" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-30
            
            " style="top:60px;left:42.85714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="53fc9a8b-3b2d-5721-8f85-7855625cc698" data-calendar-id="4" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#17a2b8
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Notivkev zolhico eju." title="Notivkev zolhico eju."><strong>17:00</strong> <span class="calendar-font-icon ic-readonly-b"></span> Notivkev zolhico eju.</span>
                </div>
    </div>



<div data-id="29" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-29
            
             tui-full-calendar-weekday-exceed-right" style="top:34px;left:85.71428571428572%;width:14.285714285714286%;height:0px;
                margin-top:2px">
        <div data-schedule-id="dde0fc8f-26ea-5695-b80d-3fbb60de6dc5" data-calendar-id="3" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    color:#d13b4c; background-color:#d13b4c; border-color:#d13b4c;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Ubanowev jat sijfajcu." title="Ubanowev jat sijfajcu."><span class="calendar-font-icon ic-user-b"></span> Ubanowev jat sijfajcu.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>



<div data-id="28" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-28
            
            " style="top:34px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="2428a8b7-101c-5116-bab4-8925bae603a6" data-calendar-id="3" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#d13b4c
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Huvahufev wip pis." title="Huvahufev wip pis."><strong>08:00</strong> <span class="calendar-font-icon ic-user-b"></span> Huvahufev wip pis.</span>
                </div>
    </div>



<div data-id="36" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-36
            
            " style="top:34px;left:28.571428571428573%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="5f2c7316-725a-5506-8b12-124b1bd81da4" data-calendar-id="6" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5856d6
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Isohef hus cac." title="Isohef hus cac."><strong>18:00</strong> <span class="calendar-font-icon ic-lock-b"></span> Private</span>
                </div>
    </div>
</div>
</div></div><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-46"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #d13b4c;"><span class="tui-full-calendar-weekday-grid-date">5</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #d13b4c;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">6</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">7</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">8</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">9</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">10</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">11</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules">


<div data-id="29" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-29
             tui-full-calendar-weekday-exceed-left
            " style="top:34px;left:0%;width:42.85714285714286%;height:0px;
                margin-top:2px">
        <div data-schedule-id="dde0fc8f-26ea-5695-b80d-3fbb60de6dc5" data-calendar-id="3" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-right: 8px;
                    color:#d13b4c; background-color:#d13b4c; border-color:#d13b4c;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Ubanowev jat sijfajcu." title="Ubanowev jat sijfajcu."><span class="calendar-font-icon ic-user-b"></span> Ubanowev jat sijfajcu.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>


<div data-id="31" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-31
            
            " style="top:60px;left:28.571428571428573%;width:57.142857142857146%;height:0px;
                margin-top:2px">
        <div data-schedule-id="5d3340ea-69db-536f-b3c2-061ce2314573" data-calendar-id="4" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#17a2b8; background-color:#17a2b8; border-color:#17a2b8;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Sognihoc zissikije pa." title="Sognihoc zissikije pa."><span class="calendar-font-icon ic-user-b"></span> Sognihoc zissikije pa.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>



<div data-id="42" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-42
            
             tui-full-calendar-weekday-exceed-right" style="top:34px;left:71.42857142857143%;width:28.571428571428573%;height:0px;
                margin-top:2px">
        <div data-schedule-id="e60c2394-ef6c-50e8-b78e-6565c75fe2c1" data-calendar-id="8" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    color:#475e77; background-color:#475e77; border-color:#475e77;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Etu wazceceb be." title="Etu wazceceb be."><span class="calendar-font-icon ic-user-b"></span> Etu wazceceb be.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>



<div data-id="35" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-35
            
            " style="top:60px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="b7962112-786b-599c-ba14-c746876ac84e" data-calendar-id="5" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#e49e3d
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Vacup woldi mavkaspa." title="Vacup woldi mavkaspa."><strong>18:30</strong> <span class="calendar-font-icon ic-readonly-b"></span> Vacup woldi mavkaspa.</span>
                </div>
    </div>



<div data-id="41" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-41
            
            " style="top:60px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="b3a0e671-2904-5770-9b9c-bfa2433b1ac7" data-calendar-id="7" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#3dc7be
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Ude tasofa hekab." title="Ude tasofa hekab."><strong>16:00</strong> <span class="calendar-font-icon ic-lock-b"></span> Private</span>
                </div>
    </div>



<div data-id="37" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-37
            
            " style="top:34px;left:57.142857142857146%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="f6dcbd54-45d5-5f45-bca2-6e1cd846a425" data-calendar-id="6" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5856d6
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Nihfiahi ro hog." title="Nihfiahi ro hog."><strong>20:30</strong> <span class="calendar-font-icon ic-lock-b"></span> Private</span>
                </div>
    </div>
</div>
</div></div><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-47"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #d13b4c;"><span class="tui-full-calendar-weekday-grid-date">12</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #d13b4c;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">13</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">14</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">15</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">16</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">17</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">18</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules">


<div data-id="42" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-42
             tui-full-calendar-weekday-exceed-left
            " style="top:34px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
        <div data-schedule-id="e60c2394-ef6c-50e8-b78e-6565c75fe2c1" data-calendar-id="8" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-right: 8px;
                    color:#475e77; background-color:#475e77; border-color:#475e77;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Etu wazceceb be." title="Etu wazceceb be."><span class="calendar-font-icon ic-user-b"></span> Etu wazceceb be.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>


<div data-id="25" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-25
            
            " style="top:60px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="f8d6e3b6-6435-526c-a2dc-8490c14c1703" data-calendar-id="2" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#25b865
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Wiwaedi gi letivme." title="Wiwaedi gi letivme."><strong>00:00</strong> <span class="calendar-font-icon ic-readonly-b"></span> Wiwaedi gi letivme.</span>
                </div>
    </div>



<div data-id="23" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-23
            
            " style="top:86px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="94e1ef43-d947-5ca2-819b-310ba99aa8bc" data-calendar-id="1" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5485e4
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Sivmegdi ak fo." title="Sivmegdi ak fo."><strong>16:30</strong> <span class="calendar-font-icon ic-location-b"></span> Sivmegdi ak fo.</span>
                </div>
    </div>



<div data-id="26" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-26
            
            " style="top:34px;left:28.571428571428573%;width:42.85714285714286%;height:0px;
                margin-top:2px">
        <div data-schedule-id="a0a841b3-4c4b-5061-ad01-bd99a9aeb95a" data-calendar-id="2" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#25b865; background-color:#25b865; border-color:#25b865;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Ugesulik boz uj." title="Ugesulik boz uj."><span class="calendar-font-icon ic-user-b"></span> Ugesulik boz uj.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>


<div data-id="21" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-21
            
            " style="top:60px;left:71.42857142857143%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="b7264d40-bc8f-531a-bbf8-2a3ea0c48b46" data-calendar-id="1" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5485e4
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Gewumu jo jozobtep." title="Gewumu jo jozobtep."><strong>00:00</strong> <span class="calendar-font-icon ic-readonly-b"></span> Gewumu jo jozobtep.</span>
                </div>
    </div>
</div>
</div></div><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-48"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #d13b4c;"><span class="tui-full-calendar-weekday-grid-date">19</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #d13b4c;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">20</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">21</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">22</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">23</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">24</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">25</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules"></div>
</div></div><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-49"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #d13b4c;"><span class="tui-full-calendar-weekday-grid-date">26</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #d13b4c;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">27</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">28</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">29</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date">30</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-today" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: #475e77;"><span class="tui-full-calendar-weekday-grid-date tui-full-calendar-weekday-grid-date-decorator">31</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: #475e77;"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">1</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules">


<div data-id="33" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-33
            
            " style="top:34px;left:28.571428571428573%;width:28.571428571428573%;height:0px;
                margin-top:2px">
        <div data-schedule-id="ccd3e64b-4189-55e0-b3d9-cac6a5d7f5b6" data-calendar-id="5" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#e49e3d; background-color:#e49e3d; border-color:#e49e3d;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Luczej wabaj diag." title="Luczej wabaj diag."><span class="calendar-font-icon ic-location-b"></span> Luczej wabaj diag.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>



<div data-id="24" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-24
            
            " style="top:34px;left:71.42857142857143%;width:28.571428571428573%;height:0px;
                margin-top:2px">
        <div data-schedule-id="41f01ca2-3d36-51b0-a0df-62434aad64d4" data-calendar-id="2" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#25b865; background-color:#25b865; border-color:#25b865;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Fagtiife di uz." title="Fagtiife di uz."><span class="calendar-font-icon ic-lock-b"></span> Private</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>



<div data-id="39" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-39
            
            " style="top:34px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="83362fff-36b1-5260-8fa2-f279c12470bc" data-calendar-id="7" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#3dc7be
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Caukucil ribkati vobirine." title="Caukucil ribkati vobirine."><strong>16:30</strong> <span class="calendar-font-icon ic-lock-b"></span> Private</span>
                </div>
    </div>



<div data-id="43" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-43
            
            " style="top:34px;left:14.285714285714286%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="4399f399-21ed-5f44-82ea-09f93e945b14" data-calendar-id="8" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#475e77
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Noffapre cieso vojuv." title="Noffapre cieso vojuv."><strong>06:30</strong> <span class="calendar-font-icon ic-user-b"></span> Noffapre cieso vojuv.</span>
                </div>
    </div>
</div>
</div></div><div class="tui-full-calendar-month-week-item" style="height: 16.6667%;"><div class="tui-full-calendar-weekday tui-view-50"><div class="tui-full-calendar-weekday-border" style="
    border-top: 1px solid #ebebf3;
"></div>
<div class="tui-full-calendar-weekday-grid">
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sun tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:0%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(255, 64, 64, 0.4);"><span class="tui-full-calendar-weekday-grid-date">2</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(255, 64, 64, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:14.285714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">3</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:28.571428571428573%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">4</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:42.85714285714286%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">5</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:57.142857142857146%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">6</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:71.42857142857143%; background-color: inherit; font-size: 14px;
        border-right:1px solid #ebebf3;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">7</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
<div class="tui-full-calendar-weekday-grid-line tui-full-calendar-holiday-sat tui-full-calendar-near-month-day tui-full-calendar-extra-date" style="width:14.285714285714286%; left:85.71428571428572%; background-color: inherit; font-size: 14px;
        ">
        <div class="tui-full-calendar-weekday-grid-header">
            <span style="color: rgba(51, 51, 51, 0.4);"><span class="tui-full-calendar-weekday-grid-date">8</span></span>
        </div>
        <div class="tui-full-calendar-weekday-grid-footer">
            <span style="color: rgba(51, 51, 51, 0.4);"></span>
        </div>
    </div>
</div>
<div class="tui-full-calendar-weekday-schedules">


<div data-id="40" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-40
            
            " style="top:34px;left:71.42857142857143%;width:28.571428571428573%;height:0px;
                margin-top:2px">
        <div data-schedule-id="4f30bf6f-19ff-5551-88d0-78ccbdda2425" data-calendar-id="7" class="tui-full-calendar-weekday-schedule " style="height:24px; line-height:24px; border-radius: 3px;
                    margin-left: 8px;
                    margin-right: 8px;
                    color:#3dc7be; background-color:#3dc7be; border-color:#3dc7be;
                    ">
            <span class="tui-full-calendar-weekday-schedule-title" data-title="Kon ji mi." title="Kon ji mi."><span class="calendar-font-icon ic-user-b"></span> Kon ji mi.</span>
            <span class="tui-full-calendar-weekday-resize-handle handle-y" style="line-height: 24px;">&nbsp;</span>
        </div>
    </div>


<div data-id="38" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-38
            
            " style="top:60px;left:85.71428571428572%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="faad43e6-8d28-5cca-8730-75567f227f0c" data-calendar-id="6" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5856d6
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Leklejvi de luva." title="Leklejvi de luva."><strong>08:00</strong> <span class="calendar-font-icon ic-user-b"></span> Leklejvi de luva.</span>
                </div>
    </div>



<div data-id="32" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-32
            
            " style="top:34px;left:0%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="1f853bc1-12d7-5287-880a-79a60cb20b35" data-calendar-id="4" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#17a2b8
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Majsirac dagwuhnom naduham." title="Majsirac dagwuhnom naduham."><strong>12:00</strong> <span class="calendar-font-icon ic-user-b"></span> Majsirac dagwuhnom naduham.</span>
                </div>
    </div>



<div data-id="22" class="tui-full-calendar-weekday-schedule-block
                tui-full-calendar-weekday-schedule-block-22
            
            " style="top:34px;left:57.142857142857146%;width:14.285714285714286%;height:0px;
                margin-top:2px">
                <div data-schedule-id="4e4dfed6-196d-5849-ac5d-b060b789f110" data-calendar-id="1" class="tui-full-calendar-weekday-schedule tui-full-calendar-weekday-schedule-time" style="height:24px; line-height:24px; ">
                    <span class="tui-full-calendar-weekday-schedule-bullet" style="top: 8px;
                                background:#5485e4
                            "></span>
                    <span class="tui-full-calendar-weekday-schedule-title" style="
                                color:
                            " data-title="Icibokev figuh ubpob." title="Icibokev figuh ubpob."><strong>22:00</strong> <span class="calendar-font-icon ic-user-b"></span> Icibokev figuh ubpob.</span>
                </div>
    </div>
</div>
</div></div></div></div><div class="tui-full-calendar-floating-layer tui-view-10" style="display: none; position: absolute;"></div><div class="tui-full-calendar-floating-layer tui-view-15" style="display: none; position: absolute;"></div><div class="tui-full-calendar-floating-layer tui-view-18" style="display: none; position: absolute;"></div></div></div>
                    </div>
           
            <!-- [ Main Content ] end -->
        </div>
    </main>

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

<script src="{{asset('assets/vendors/js/daterangepicker.min.js');}}"></script>
<script src="{{asset('assets/vendors/js/vendors.min.js');}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{asset('assets/vendors/js/tui-code-snippet.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-time-picker.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-date-picker.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/moment.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/chance.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-calendar.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-calendars.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-schedules.min.js');}}"></script>
    <script src="{{asset('assets/vendors/js/tui-calendar-init.min.js');}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('assets/js/common-init.min.js');}}"></script>
    <script src="{{asset('assets/js/apps-calendar-init.min.js');}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('assets/js/theme-customizer-init.min.js');}}"></script>
    <script src="{{asset('https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');}}"></script>
			<script src="{{asset('https:oss.maxcdn.com/respond/1.4.2/respond.min.js');}}"></script>

@endsection