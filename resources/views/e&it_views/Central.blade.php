@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Achievement</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Achievement</li>
            </ul>
        </div>
    </div>
</section>

<section class="update-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2">
                <div class="update-one__left">
                    <div class="update-one__city-update-box">
                        <div class="update-one__city-update-icon">
                            <img src="{{ asset('eit_assets/images/icon/update-one-city-update-icon.png'); }}" alt="">
                        </div>
                        <div class="update-one__city-update-text">
                            <p>Latest Update</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10">
                <div class="update-one__right">
                    <div class="update-one__carousel thm-owl__carousel owl-theme owl-carousel owl-loaded owl-drag"
                        data-owl-options="{
                                &quot;items&quot;: 1,
                                &quot;margin&quot;: 10,
                                &quot;smartSpeed&quot;: 500,
                                &quot;loop&quot;:true,
                                &quot;autoplay&quot;: true,
                                &quot;nav&quot;:false,
                                &quot;dots&quot;:false,
                                &quot;navText&quot;: [&quot;<span class=\&quot;icon-left-arrow\&quot;></span>&quot;,&quot;<span class=\&quot;icon-right-arrow\&quot;></span>&quot;],
                                &quot;responsive&quot;:{
                                    &quot;0&quot;:{
                                        &quot;items&quot;:1
                                    },
                                    &quot;768&quot;:{
                                        &quot;items&quot;:1
                                    },
                                    &quot;992&quot;:{
                                        &quot;items&quot;: 1
                                    }
                                }
                            }">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-3120px, 0px, 0px); transition: all 0.5s ease 0s; width: 5460px;">
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    class="icon-left-arrow"></span></button><button type="button" role="presentation"
                                class="owl-next"><span class="icon-right-arrow"></span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
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

                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title" style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Central Project Monitoring Unit Project-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li> A centralized project management system has been created to assist the
                                            government in appraisal and review of infrastructure projects, which will
                                            provide necessary assistance in carrying out work-flow based management of
                                            the projects being run in the departments and in continuous monitoring of
                                            physical and financial progress and decision-making. will be received.
                                            Review and evaluation of infrastructure projects is being done in Public
                                            Works Department, Nava Raipur Atal Municipal Development Authority,
                                            Chhattisgarh Road Development Corporation, Chhattisgarh State Electricity
                                            Distribution Company Limited and Chhattisgarh State Power Transmission
                                            Company Limited.
                                            <br>
                                            Centralized Project Management System has been designed and planned as per
                                            the requirement of the departments. The budget, location, stages of its
                                            implementation, information of stakeholders are included for the projects
                                            operated by this system. A mobile-app has been developed for the measurement
                                            book, through which the actual location (latitude-longitude) of the
                                            structures under construction and the measurement book are entered with
                                            pictures. Monitoring of projects is being done at all levels through
                                            dashboard.
                                        </li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            @include('e&it_views.include.chips_activity_sidebar')
        </div>
    </div>
</section>
@endsection