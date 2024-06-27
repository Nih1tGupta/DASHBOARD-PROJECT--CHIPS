@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Departmental Activities</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('view_home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Departmental Activities</li>
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
                            <span class="icon-suitcase"></span>
                        </div>
                        <h3 class="department-details__title center">Achievement</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Activities</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>The basic objective of the activities of the department in the state is to
                                            establish infrastructure for telecommunication and information technology in
                                            the state, in which a better environment is created for the industries and
                                            through the services of e-governance, speedy and quality services can be
                                            provided to the common man of the state. Can you Many projects have been
                                            implemented by the department through chips.</li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            @include('e&it_views.include.sidebar_notice_board')
            @include('e&it_views.include.table')
        </div>
    </div>
</section>
@endsection