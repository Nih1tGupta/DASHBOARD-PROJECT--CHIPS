@extends('e&it_views.layout')
@section('title','Ministry of ECE AND IT')
@section('content')



<section class="main-slider-three">
    <div class="main-slider-three__carousel owl-carousel owl-theme thm-owl__carousel owl-loaded owl-drag"
        data-owl-options="{&quot;loop&quot;: true, &quot;items&quot;: 1, &quot;navText&quot;: [&quot;&quot;,&quot;&quot;], &quot;margin&quot;: 0, &quot;dots&quot;: false, &quot;nav&quot;: false, &quot;animateOut&quot;: &quot;slideOutDown&quot;, &quot;animateIn&quot;: &quot;fadeIn&quot;, &quot;active&quot;: true, &quot;smartSpeed&quot;: 1000, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000, &quot;autoplayHoverPause&quot;: false}">

        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-2056px, 0px, 0px); transition: all 0s ease 0s; width: 5140px;">
                <div class="owl-item cloned" style="width: 1028px;">
                    <div class="item main-slider-three__slide-1">
                        <div class="main-slider-three__bg"
                            style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});">
                        </div><!-- /.slider-one__bg -->
                        <div class="container">
                            <div class="main-slider-three__content">
                                <p class="main-slider-three__sub-title">Welcome to the official website of</p>
                                <h2 class="main-slider-three__title">Department of E&amp;IT <br> Chhattisgarh</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="{{route('e&it_views.chips_activity')}}"
                                        class="main-slider-three__btn thm-btn">Know More</a>
                                </div>
                                <div class="main-slider-three__weather-box">
                                    <div class="about-three__services-box">
                                        <h3 class="about-three__services-title">Key Projects</h3>
                                        <ul class="about-three__services-list list-unstyled">
                                            <li><a href="{{route('e&it_views.State-Data')}}"><i
                                                        class="fa fa-angle-right"></i>State
                                                    Data Center</a></li>
                                            <li><a href="{{route('e&it_views.CG-SWAN')}}"><i
                                                        class="fa fa-angle-right"></i>CG SWAN</a>
                                            </li>
                                            <li><a href="{{route('e&it_views.Geographic')}}"><i
                                                        class="fa fa-angle-right"></i>GIS</a></li>
                                            <li><a href="{{route('e&it_views.Incubator')}}"><i
                                                        class="fa fa-angle-right"></i> 36
                                                    Inc</a></li>
                                            <li><a href="{{route('e&it_views.E')}}"><i
                                                        class="fa fa-angle-right"></i>eDistrict</a></li>
                                            <li><a href="{{route('e&it_views.Wi-Fi')}}"><i
                                                        class="fa fa-angle-right"></i>Wifi
                                                    City</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>SLCM</a></li>
                                        </ul>
                                        <div class="fd">
                                            <a href="{{route('e&it_views.chips_activity')}}"
                                                class="about-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1028px;">
                    <div class="item main-slider-three__slide-1">
                        <div class="main-slider-three__bg"
                            style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});">
                        </div><!-- /.slider-one__bg -->
                        <div class="container">
                            <div class="main-slider-three__content">
                                <p class="main-slider-three__sub-title">Welcome to the official website of</p>
                                <h2 class="main-slider-three__title">Department of E&amp;IT <br> Chhattisgarh</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="{{route('e&it_views.chips_activity')}}"
                                        class="main-slider-three__btn thm-btn">Know More</a>
                                </div>
                                <div class="main-slider-three__weather-box">
                                    <div class="about-three__services-box">
                                        <h3 class="about-three__services-title">Key Projects</h3>
                                        <ul class="about-three__services-list list-unstyled">
                                            <li><a href="{{route('e&it_views.State-Data')}}"><i
                                                        class="fa fa-angle-right"></i>State
                                                    Data Center</a></li>
                                            <li><a href="{{route('e&it_views.CG-SWAN')}}"><i
                                                        class="fa fa-angle-right"></i>CG SWAN</a>
                                            </li>
                                            <li><a href="{{route('e&it_views.Geographic')}}"><i
                                                        class="fa fa-angle-right"></i>GIS</a></li>
                                            <li><a href="{{route('e&it_views.Incubator')}}"><i
                                                        class="fa fa-angle-right"></i> 36
                                                    Inc</a></li>
                                            <li><a href="{{route('e&it_views.E')}}"><i
                                                        class="fa fa-angle-right"></i>eDistrict</a></li>
                                            <li><a href="{{route('e&it_views.Wi-Fi')}}"><i
                                                        class="fa fa-angle-right"></i>Wifi
                                                    City</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>SLCM</a></li>
                                        </ul>
                                        <div class="fd">
                                            <a href="{{route('e&it_views.chips_activity')}}"
                                                class="about-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button
                type="button" role="presentation" class="owl-next"></button></div>
        <div class="owl-dots disabled"></div>
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
                            <marquee width="100%" direction="left" height="31px">
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
                        </marquee>
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
            <div class="col-xl-4 col-lg-4">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-lightbulb"></span>
                        </div>
                        <h3 class="department-details__title">About us</h3>
                    </div>
                    <p class="department-details__text-1">Chhattisgarh Infotech Promotion Society (CHi PS) is the nodal
                        agency and prime mover for propelling IT growth & implementation of the IT & e-Governance
                        projects in the State of Chhattisgarh. CHi PS is involved in the end-to-end implementation of
                        some mega IT Projects like, SDC, SSDG, SWAN, GIS, CHOi CE, e-Procurement etc. A professional
                        approach is being adopted for the implementation of IT Projects using the services of
                        e-governance experts and consultants from corporate and academia.</p>
                    <p class="department-details__text-2"> With a view to make Chhattisgarh an IT enabled state
                        progressively, CHi PS has come up with the “Electronics, IT and ITeS Investment Policy of
                        Chhattisgarh 2014 – 2019”.</p>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="team-one__single">
                    <div class="team-one__shape-2">
                        <img src="{{ asset('eit_assets/images/shapes/team-one-shape-2.png'); }}" alt="">
                    </div>
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ asset('eit_assets/images/people/cm.jpg'); }}" style="height:331px;" alt="">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__name"><a href="team-details.html">Shri Vishnu Dev Say</a></h3>
                        <p class="team-one__sub-title">Honourable Chief Minister<br> Chhattisgarh</p></p>
                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            @include('e&it_views.include.sidebar_notice_board')
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

<section class="department-one">
    <div class="department-one__bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/department-one-bg.png'); }});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="department-one__inner">
                    <div class="section-title text-center">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">Organizational Info</span>
                        <h2 class="section-title__title">Explore Parts of Department</h2>
                    </div>
                    <ul class="department-one__list list-unstyled">
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="department-details.html">CH<i>i</i>PS</a>
                                </h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-building"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{route('e&it_views.State-Data')}}">SDC</a>
                                </h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-suitcase"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a
                                        href="{{route('e&it_views.BharatNet')}}">Bharatnet</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-wifi"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a href="{{route('e&it_views.Geographic')}}">GIS</a>
                                </h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-globe"></span>
                                </div>
                            </div>
                        </li>
                        <li class="department-one__single">
                            <div class="department-one__content">
                                <h3 class="department-one__title"><a
                                        href="{{route('e&it_views.chips_activity')}}">Explore All</a></h3>
                                <div class="department-one__icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



@include('e&it_views.include.table')
@endsection