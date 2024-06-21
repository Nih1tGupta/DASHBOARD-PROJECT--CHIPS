@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Related Links</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>Related Links</li>
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
                        <h3 class="department-details__title">Related Links</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <ul>
                                
                                    <li><a href="http://slcm.cgstate.gov.in/">SLCM</a></li>
                                    <li><a href="http://youthpolicy.cgstate.gov.in/">CG Youth Policy</a></li>
                                    <li><a href="http://cgeprocurement.gov.in/cg/index.asp">e-Procurement</a></li>
                                    <li><a href="http://www.choice.gov.in/">CHOiCE</a></li>
                                    <li><a href="http://dprcg.gov.in/">Directorate of Public Relation</a></li>
                                    <li><a href="#">CGSWAN (Chhattisgarh State Wide Area Netwok)</a></li>
                                    <li><a href="http://www.cgpolice.gov.in/">Chhattisgarh Police</a></li>
                                    <li><a href="http://www.cgstate.gov.in/">Chhattisgarh Govt.</a></li>
                                    <li><a href="https://www.cgstate.gov.in/web/women-and-child-development/home">Women and Child Welfare Department</a></li>
                                    <li><a href="https://cgstate.gov.in/web/department-of-labour/home">Labour Department</a></li>
                                    <li><a href="http://splc.cgstate.gov.in/">State Project Livelihood College</a></li>
                                    <li><a href="http://www.chips.gov.in/">State Data Center Helpdesk System</a></li>
                                    <li><a href="https://digilocker.gov.in/">Digital Locker</a></li>
                                    <li><a href="https://www.scholarships.gov.in/">National Scholarships Portal</a></li>
                                    <li><a href="https://ors.gov.in/index.html">e-Hospital- Online Registration System (ORS)</a></li>
                                    <li><a href="#">Digitize India Platform</a></li>
                                    <li><a href="http://www.digitalindia.gov.in/">Digital India Portal</a></li>
                                    <li><a href="http://deity.gov.in/">http://deity.gov.in/</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            @include('e&it_views.include.imp_links_sidebar')


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