@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Site Map</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Site Map</li>
            </ul>
        </div>
    </div>
</section>

<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-tasks"></span>
                        </div>
                        <h3 class="department-details__title">Site Map</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <ul>
                            <li>
                                <a href="/home">Home</a>
                            </li>
                            <li>
                                About Us
                                <ul>
                                    <li>
                                        <a href="/acts_and_rules">Acts & Rules</a>
                                    </li>
                                    <li>
                                        <a href="/program_and_schemes">Programmes & Schemes</a>
                                    </li>
                                    <li>
                                        <a href="/organisation_chart">Organisation Chart</a>
                                    </li>
                                    <li>
                                        <a href="/whos_who">Who's Who</a>
                                    </li>
                                    <li>
                                        <a href="/achievements">Achievements</a>
                                    </li>
                                    <li>
                                        <a href="/departmental_activities">Departmental Activities</a>
                                    </li>
                                    <li>
                                        <a href="/departmental_structure">Departmental Structure</a>
                                    </li>
                                    <li>
                                        <a href="/subject_matter_art_scheme">Subject Matter of formulated policy</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/services">Services</a>
                            </li>
                            <li>
                                <a href="/gallery">Photo Gallery</a>
                            </li>
                            <li>
                                Notice Board
                                <ul>
                                    <li>
                                        <a href="/news">News</a>
                                    </li>
                                    <li>
                                        <a href="/tenders">Tenders</a>
                                    </li>
                                    <li>
                                        <a href="/orders">Orders</a>
                                    </li>
                                    <li>
                                        <a href="/circulars">Circulars</a>
                                    </li>
                                    <li>
                                        <a href="/recruitments">Recruitments</a>
                                    </li>
                                    <li>
                                        <a href="/notifications">Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/chips-activity">Chips Activity</a>
                            </li>
                            <li>
                                <a href="/right_to_information">Right to Information</a>
                            </li>
                            <li>
                                <a href="/contact_us">Contact Us</a>
                            </li>

                            <li>
                                <a href="/Accessibility">Accessibility Statement</a>
                            </li>
                            <li>
                                <a href="/Disclaimer">Disclaimer</a>
                            </li>
                            <li>
                                <a href="/Copyright">Copyright Policy</a>
                            </li>
                            <li>
                                <a href="/Site">Site Map</a>
                            </li>
                            <li>
                                <a href="/Feedback">Feedback</a>
                            </li>
                            <li>
                                <a href="/Hyperlink">Hyperlink Policy</a>
                            </li>
                            <li>
                                <a href="/Privacy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="/Terms-and-Conditions">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="/Terms-of-Use">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="/Help">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            @include('e&it_views.include.footer_sidebar')


            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <!-- <div class="col-xl-4 col-lg-4">
                <div class="department-details__download">
                    <h3 class="department-details__download-title">Achievements &amp; Awards</h3>
                    <ul class="department-details__download-list list-unstyled">
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

@endsection